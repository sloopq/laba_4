<?php
require_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('reference-yen-419714-af1e66035e3e.json');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '16RDPga4ud4iHTTJ4jViu4Z52y4laNQ0wqs257KGr9HA';
$range = 'Laba';

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$values = [
    [$email, $category, $title, $description],
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);

if ($result) {
    echo 'Данные успешно добавлены в таблицу!!!';
} else {
    echo 'Error 404';
}

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

// Отображение данных на странице
if (!empty($values)) {
    echo "<table border='1'>";
    foreach ($values as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Данных нету";
}
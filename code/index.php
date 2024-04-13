<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avito</title>
</head>
<body> 
    <div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name = "email" required>

        <label for="category">Category</label>
        <select name="category">
       



            <!-- <option value="cars">cars</option>
            <option value="other">other</option> -->
        </select>

        <label for="title">Title</label>
        <input type="text" name = "title" required>

        <label for="description">Description</label>
        <textarea name="description" rows="1" cols = "10"></textarea>

        <input type="submit" value="Save">
    </form>
    </div>
</body>
</html>
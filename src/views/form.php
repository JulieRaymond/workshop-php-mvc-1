<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de recettes</title>
</head>

<body>
    <h1>Send us your recipe ! </h1>
    <form method="POST" action="add.php">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required maxlength="255">
        <label for="description">Description</label>
        <textarea id="description" name="description" placeholder="Write here your recipe"></textarea>

        <button type="submit">Send recipe</button>
    </form>
</body>

</html>
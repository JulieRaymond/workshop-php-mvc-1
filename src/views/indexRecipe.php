<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... -->
</head>

<body>
    <h1>List of Recipes</h1>

    <?php if (isset($successMessage)) : ?>
        <p><?= $successMessage ?></p>
    <?php endif; ?>

    <ul>
        <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="show.php?id=<?= $recipe['id'] ?>">
                    <?= $recipe['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List of Recipes</title>
</head>

<body>
    <h1>List of Recipes</h1>
    <ul>
        <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="show.php?id=<?= $recipe['id'] ?>">
                    <?= $recipe['title'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
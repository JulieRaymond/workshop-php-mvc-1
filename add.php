<?php
require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

$errors = [];
$recipe = [
    'title' => '',
    'description' => ''
];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $recipe['title'] = $_POST['title'];
        $recipe['description'] = $_POST['description'];

        if (empty($recipe['title'])) {
            $errors[] = 'Title is required';
        }

        if (empty($errors)) {
            saveRecipe($recipe);
            header('Location: index.php');
        }
    } else {
        $errors[] = 'Both title and description are required';
    }
}

require __DIR__ . '/src/views/form.php';

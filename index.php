<?php
require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

// Check if the form was submitted and a recipe was added
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    // Assuming you've successfully added a new recipe
    $successMessage = "Recipe added successfully!";
}

// Fetching all recipes from the database - assuming the database is okay
$recipes = getAllRecipes();

// Generate the web page
require __DIR__ . '/src/views/indexRecipe.php';

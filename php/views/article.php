<?php
// Include the header template to maintain a consistent layout across pages
include("../templates/header.tpl.php");

// Get the 'number' parameter from the URL using the GET method
$number = $_GET['number'];

// Include the data source for articles
include('../datas/articles.php');

// Retrieve the specific article using the provided 'number' index from the URL
$article = $articles[$number];

// Include the article template to display the specific article content
include("../templates/article.tpl.php");
?>

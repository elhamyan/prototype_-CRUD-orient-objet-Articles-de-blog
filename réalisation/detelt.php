<?php
require 'database.php';
require 'article.php';

$db = (new Database())->getConnection();

$article = new Article();
$article->setConnection($db);

$article->delete($_GET['id']);

header("Location:index.php");
?>
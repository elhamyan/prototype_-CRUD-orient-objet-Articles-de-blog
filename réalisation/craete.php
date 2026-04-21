<?php
require 'database.php';;
require 'article.php';

$db = (new Database())->getConnection();

$article = new Article();
$article->setConnection($db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
        $article->create($_POST['titre'], $_POST['contenu'],$_POST['date_pub']);
        header("Location: index.php");
        exit;
    } else {
        echo "❌ remplir tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form method="POST">
    <input type="text" name="titre" placeholder="Titre"><br><br>
    <textarea name="contenu" placeholder="Contenu"></textarea><br><br>
    <input type="date" name="date_pub" placeholder="date_pub"><br><br>

    <button type="submit">Ajouter</button>
</form>
</body>
</html>
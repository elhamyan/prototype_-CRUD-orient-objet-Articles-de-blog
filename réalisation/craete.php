<?php
require 'database.php';;
require 'articl.php';

$db = (new Database())->getConnection();

$article = new Article();
$article->setConnection($db);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
        $article->create($_POST['titre'], $_POST['contenu']);
        header("Location: index.php");
        exit;
    } else {
        echo "❌ remplir tous les champs";
    }
}
?>

<form method="POST">
    <input type="text" name="titre" placeholder="Titre"><br>
    <textarea name="contenu" placeholder="Contenu"></textarea><br>
    <button type="submit">Ajouter</button>
</form>
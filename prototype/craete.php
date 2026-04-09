<?php
require_once "article.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['add'])) {

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        $database = new Database();
        $db = $database->getConnection();

        $article = new Article();
        $article->setConnection($db);

        $article->create($titre, $contenu);

        echo "Article added successfully";
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


    <form method="POST" action="">

        <input type="text" name="titre" placeholder="Title" required>
        <br><br>

        <textarea name="contenu" placeholder="Content" required></textarea>
        <br><br>

        <button type="submit" name="add">Add Article</button>
    </form>

    <a href="index.php">result</a>

</body>

</html>


 






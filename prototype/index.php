<?php
require 'article.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <h1>liste des articles</h1>
</head>
<body>
    <div class="countent">
        <?php
        $articles= Article::readAll();
        foreach($articles as $article){
            echo "<div class='article'>";
            echo "<h1>".$article['titre']."</h1>";
            echo "<p>".$article['contenu']."</p>";
            echo "<p>".$article['id_utilisateur']."</p>";
            echo "<p>".$article['date_pub']."</p>";
            echo "</div>";
        }?>
    </div>

</body>
</html>
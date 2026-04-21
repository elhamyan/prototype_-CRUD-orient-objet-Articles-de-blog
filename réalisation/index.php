<?php
require 'database.php';
require 'article.php';

$db = (new Database())->getConnection();

$article = new Article();
$article->setConnection($db);

$articles = $article->read();
?>
<h1>Liste des articles</h1>

<a href="craete.php">➕ Ajouter</a>

<?php foreach($articles as $a): ?>
    <div>
        <h3><?= $a['titre'] ?></h3>
        <p><?= $a['contenu'] ?></p>

        <a href="detelt.php?id=<?= $a['id'] ?>"
        style >❌ Supprimer</a>
    </div>
<?php endforeach; ?>
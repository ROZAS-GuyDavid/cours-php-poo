<?php
$post = $db->prepare('SELECT * FROM articles WHERE id= ?', [$_GET['id']], 'App\Table\Article', true);
?>

<h2 class="display-5 fw-bold lh-1 mb-3"><?= $post->titre; ?></h2>

<p class="lead"><?= $post->contenu; ?></p>
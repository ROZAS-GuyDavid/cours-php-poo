<?php
$app = App::getInstance();
$post = $app->getTable('Post')->findWithCategory($_GET['id']);
if ($post === false) {
    $app->notFound();
}
$app->title = $post->titre;
?>

<h2 class="display-5 fw-bold lh-1 mb-3"><?= $post->titre; ?></h2>

<p><em><?= $post->categorie; ?></em></p>

<p class="lead"><?= $post->contenu; ?></p>
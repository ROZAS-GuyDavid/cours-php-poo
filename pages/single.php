<?php
use App\App;
use App\Table\Article;
use App\Table\Categorie;

$post = Article::find($_GET['id']);
if ($post === false) {
    App::notFound();
}
App::setTitle($post->titre);
?>

<h2 class="display-5 fw-bold lh-1 mb-3"><?= $post->titre; ?></h2>

<p><em><?= $post->categorie; ?></em></p>

<p class="lead"><?= $post->contenu; ?></p>
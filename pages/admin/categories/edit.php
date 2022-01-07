<?php
$table = App::getInstance()->getTable('Category');
if (!empty($_POST)) {
    $result = $table->update($_GET['id'], [
        'titre' => $_POST['titre']
    ]);
    if ($result) {
        ?>
            <div class="alert alert-success">La catégorie à bien été modifiée</div>
        <?php
    }
}
$categorie = $table->find($_GET['id']);
$form = new \Core\HTML\BootstrapForm($categorie);
?>

<form method="post">
    <?= $form->input('titre', 'Titre de La catégorie');?>
    <button class="btn btn-primary"> Sauvegarder</button>
</form>
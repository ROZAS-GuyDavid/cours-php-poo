<form method="post">
    <?= $form->input('titre', 'Titre de L\'article');?>
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']);?>
    <?= $form->select('category_id', 'Catégorie', $categories);?>
    <button class="btn btn-primary"> Sauvegarder</button>
</form>
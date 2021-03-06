<?php $title = 'Mon blog';

if (isset($_SESSION['pseudo']) && isset($_SESSION['id'])) {
    if ($_SESSION['role'] == 1) {

        require('view/frontend/header.php');

        ?>




        <?php ob_start(); ?>
        <header class="text-black">
            <div class="container text-center">

                <p class="lead">Panneau d'administration</p>
            </div>
        </header>

        <div class="container">

            <button class="btn btn-info btn-lg btn-block"><a class="text-white" href='commentsAdministration'>Modérations des Commentaires</a></button><br>
            <button class="btn btn-primary" id="addart"><a href="createPage">Ajouter un article</a></button>


            <?php
                    while ($data = $posts->fetch()) {
                        ?>


                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-title">
                            <?= htmlspecialchars($data['title']) ?></p>
                        <a href="./updatePost/<?= $data['id'] ?>">Consulter ou Modifier l'article</a></br>
                        <a href="./deletePost/<?= $data['id'] ?>">Supprimer l'article</a>
                    </div>
                    <div class="card-footer text-muted">
                        <em>le <?= $data['creation_date_fr'] ?></em>
                    </div>
                </div>

            <?php
                    }
                    $posts->closeCursor();
                    ?>
        </div>
        <?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php');
    } else {

        echo 'Vous vous êtes egarés';
    }
} else {
    echo 'Vous vous êtes egarés';
}
?>
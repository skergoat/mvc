<?php 
/**
 * HOMEPAGE
 */
ob_start(); ?>

<header>
    <img src="public/assets/img/pyramide.jpeg" class="img-fluid" alt="pyramide">
    <div class="main-title">
        <h1>Faites un voyage inoubliable</h1>
    </div>
</header>
<?php if(!empty($places)) { ?>
    <ul>
        <?php foreach($places as $places) { ?>
        <li><?= $places["name"] ?></li>
        <?php } ?>
    </ul>
<?php } else { ?>
    <div class="alert alert-warning mt-5 col-3 mx-auto text-center" role="alert">
    Aucune destination pour le moment
    </div>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
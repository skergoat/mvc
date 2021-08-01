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

<div class="container">


</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
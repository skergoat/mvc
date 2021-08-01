<?php 
/**
 * ABOUT
 */
ob_start(); ?>

<div class="container">
    <h2 class="mt-5">About</h2>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
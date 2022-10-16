<?php

/*
Template Name: Content Page
*/
get_header();
?>

<?php get_template_part('section/navigation-main') ?>


<?php get_template_part('section/slider') ?>

<?php get_template_part('section/latest-posts-new') ?>


<?php get_template_part('section/subscription-horizontal') ?>

<?php get_template_part('section/insight') ?>


<?php get_template_part('section/cta/apply-gcr') ?>

<?php get_template_part('section/gcr-announcement') ?>

<?php get_template_part('section/subscription-vertical') ?>
    
<?php get_footer(); ?>
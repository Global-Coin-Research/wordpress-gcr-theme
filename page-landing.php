<?php 
/*
Template Name: Landing Page Template
*/
?>
<?php 
get_header();

get_template_part('section/navigation-minimal') 
?>
<?php get_template_part('section/slider-landing') ?>

<?php get_template_part('section/flagship') ?>

<?php get_template_part('section/subscription-horizontal') ?>

<?php get_template_part('section/tiers') ?>


<?php get_template_part('section/cta/learn-tokenomics') ?>

<?php get_template_part('section/cta/get-gcr') ?>

<?php get_template_part('section/gcr-news') ?>

<?php get_template_part('section/cta/fan-board') ?>

<?php get_template_part('section/footer-minimal'); ?>
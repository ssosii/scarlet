<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
<main id="home">
    <?php get_template_part('pages/Home/content', 'hero') ?>
    <?php get_template_part('pages/Home/content', 'about') ?>
    <?php get_template_part('pages/Home/content', 'offer') ?>
    <?php get_template_part('pages/Home/content', 'portfolio') ?>
    <?php get_template_part('pages/Home/content', 'client') ?>
    <?php get_template_part('pages/Home/content', 'blog') ?>
</main>
<?php
get_footer();
<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/welcome') ?>
</section>

<section id="list">
	<?php get_template_part('blocks/list') ?>
</section>

<section id="list-two">
	<?php get_template_part('blocks/list-two') ?>
</section>

<section id="instruction">
	<?php get_template_part('blocks/instruction') ?>
</section>

<section id="products">
	<?php get_template_part('blocks/products') ?>
</section>

<section id="sert">
	<?php get_template_part('blocks/sert') ?>
</section>

<section id="delivery">
	<?php get_template_part('blocks/delivery') ?>
</section>

<?php get_footer(); ?>
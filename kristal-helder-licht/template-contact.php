<?php
/*
Template Name: Contact
*/
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MA_Faiss
 */

get_header();
?>
<h1 class="contact-title">Contact ons</h1>
<section class="contact-section">
    <?php echo do_shortcode('[wpforms id="43"]'); ?>
</section>


<?php
get_footer();

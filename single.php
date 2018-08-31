<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mosaic-theme
 */

get_header();
?>

<section class="single">
    <div class="content">
        <div class="row">
            <?php

            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;

            ?>
        </div>
    </div>
</section>

<?php
get_footer();

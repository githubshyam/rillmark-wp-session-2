<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Suson_Waiba
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            while (have_posts()) :
                the_post();

                ?>


                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <header class="entry-header">
                        <?php
                        if (is_singular()) :
                            the_title('<h1 class="entry-title">', '</h1>');
                        else :
                            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                        endif;
                        ?>
                        Price: <?php the_field('price'); ?>
                        |
                        Duration: <?php the_field('duration'); ?>
                    </header><!-- .entry-header -->

                    <?php
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                    ?>

                    <div class="entry-content">
                        <?php
                        the_content(sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'suson-waiba'),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        ));

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'suson-waiba'),
                            'after' => '</div>',
                        ));
                        ?>
                    </div><!-- .entry-content -->

                    <h1>Facilities</h1>
                    <div class="">
                        <?php the_field('facilities'); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php suson_waiba_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->


                <?php

                the_post_navigation();

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

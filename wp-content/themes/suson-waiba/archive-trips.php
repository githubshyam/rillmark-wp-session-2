<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Suson_Waiba
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header><!-- .page-header -->

                <div class="trip-list">
                    <div class="row">
                        <?php
                        while (have_posts()) :
                            the_post();
                            ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <?php
                                    the_post_thumbnail('200x250_thumb', array('class' => 'card-img-top img-fluid'))
                                    ?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="text-center">Rs. <?php the_field('price'); ?> | Duration: <?php the_field('duration'); ?></p>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>


                <?php

                the_posts_navigation();

            else :

                get_template_part('template-parts/content', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

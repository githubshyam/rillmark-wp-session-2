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

                <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                    <div class="col-md-6 px-0">
                        <h1 class="display-4 font-italic"><?php the_field('cta_boxs_title'); ?></h1>
                        <p class="lead my-3"><?php the_field('cta_boxs_description'); ?></p>
                        <?php
                        if (get_field('cta_boxs_button_label')!= '') {
                            ?>
                            <p class="lead mb-0"><a href="<?php the_field('cta_boxs_button_link_url'); ?>" class="text-white font-weight-bold"><?php the_field('cta_boxs_button_label'); ?></a></p>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="row mb-2">

                    <?php
                    foreach (get_field('second_sections_posts') as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">
                                        <?php
                                        foreach (get_the_category() as $category) {
                                            ?>
                                            <a href="<?php echo get_category_link($category->term_id) ?>">
                                                <span class="badge badge-primary"><?= $category->name ?></span>
                                            </a>
                                            <?php
                                        }
                                        ?>
                                    </strong>

                                    <h3 class="mb-0">
                                        <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="mb-1 text-muted"><?php echo date('M d, Y', strtotime($post->post_date)) ?></div>
                                    <p class="card-text mb-auto"><?php the_excerpt() ?></p>
                                    <a href="<?php the_permalink(); ?>">Continue reading</a>
                                </div>
                                <?php
                                the_post_thumbnail('200x250_thumb', array('class' => 'card-img-right flex-auto d-none d-lg-block'))
                                ?>
                            </div>
                        </div>
                        <?php
                        wp_reset_postdata();
                    }
                    ?>

                </div>

                <?php
            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

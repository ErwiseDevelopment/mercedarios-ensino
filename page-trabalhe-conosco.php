<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<section>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-11 px-5">

                <div class="l-work__box bg-info px-5">

                    <form>

                        <div class="row">

                            <div class="col-12">
                                <input 
                                class=""
                                type="text"
                                placeholder="Nome Completo*">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php

get_footer();

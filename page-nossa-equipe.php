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

<!-- banner -->
<section
class="u-border-color-dark-marron u-bg-cover u-bg-no-repeat py-5" 
style="border-top:20px solid;background-image:url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-title.png)">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="d-flex justify-content-center align-items-center">
                    <img 
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-plus-title.png" 
                    alt="Ícone mais">

                    <h1 class="d-inline-block u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white mb-0 ml-3">
                        Nossa equipe
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="l-team py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 12; $i++ ) { ?>
                        <div class="col-md-6 my-3">

                            <div class="card border-0">

                                <div class="card-img px-4">
                                    <img
                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/team-image-1.png"
                                    alt="Foto 01">
                                </div>

                                <div class="card-body mt-n3 pt-0 px-0">

                                    <div class="l-team__box-title py-3 px-4">
                                        <h4 class="u-font-size-18 xl:u-font-size-22 xxl:u-font-size-26 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white">
                                            FREI JOCIEL BATISTA
                                            DE CARVALHO, O. DE M.
                                        </h4>
                                    </div>

                                    <div class="mt-n3 pl-3 pl-lg-5">
                                        <div class="l-team__box-office py-3">
                                            <p class="u-font-size-15 xl:u-font-size-18 xxl:u-font-size-20 u-font-weight-extrabold u-font-family-nunito text-center text-uppercase u-color-folk-bold-marron mb-0">
                                                Representante da Mantenedora
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- banner material -->
<?php echo get_template_part( 'template-parts/content', 'banner-material' ) ?>
<!-- end banner material -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

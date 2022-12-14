<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabio Melo Dev
 *
 * Template Name: Modelo Estrututa Unidades
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                        Estrutura
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- units -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-structure-units">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 8; $i++ ) { ?>
                            <a 
                            class="swiper-slide text-decoration-none"
                            href="#">

                                <div class="card">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/estrutura-1.png"
                                        alt="Estrutura 1">
                                    </div>

                                    <div 
                                    class="card-body"
                                    style="background-color:#871619">
                                        <h4 class="u-font-size-32 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white mb-0">
                                            Biblioteca | Unidade I
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                        <!-- end slide -->
                    </div>

                    <!-- navigation -->
                    <div class="swiper-button-prev swiper-button-prev-structure-units js-swiper-button-prev-structure-units"></div>
                    <div class="swiper-button-next swiper-button-next-structure-units js-swiper-button-next-structure-units"></div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end units -->

<!-- banner material -->
<?php echo get_template_part( 'template-parts/content', 'banner-material' ) ?>
<!-- end banner material -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>

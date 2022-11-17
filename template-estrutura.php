<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabio Melo Dev
 *
 * Template Name: Modelo Estrututa com Fotos
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

<!-- content -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <span class="d-block u-font-size-18 all:u-font-family-nunito">
                    <?php the_content() ?>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<section class="mb-5 pb-5">

    <div class="container-fluid">

        <div class="row">

            <!-- desktop -->
            <div class="col-12 d-none d-lg-block">

                <div class="row">

                    <?php for( $i = 0; $i < 4; $i++ ) { ?>
                        <div class="col-lg-3 l-photos__col-child">

                            <div class="row">

                                <?php 
                                    $count = -1;
                                    
                                    for( $j = 0; $j < 2; $j++ ) { 
                                        $count++;
                                        $images = get_field('galeria_estrutura');
                                        if( $images ): 
                                ?>
                                <?php foreach( $images as $image ): ?>
                                        <div 
                                        class="col-12 l-photos__item-child d-flex justify-content-center align-items-center js-photos px-0" 
                                        data-value="<?php echo $count; ?>">
                                            <a 
                                            class="l-photos__overlay"
                                            href="#">
                                                <img
                                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                                src="<?php echo esc_url($image['thumbnail']); ?>"
                                                alt="">
                                            </a>
                                        </div>
                                        <?php endforeach; endif;?>
                            </div>
                        </div>
                    <?php };} ?>
                </div>
            </div>
            <!-- end desktop -->

            <!-- mobile -->
            <div class="col-12 d-lg-none px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-photos">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <div class="swiper-slide">
                            <a 
                            class="l-photos__overlay"
                            href="#">
                                <img
                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                src="<?php  ?>"
                                alt="">
                            </a>
                        </div>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
            <!-- end mobile -->
        </div>
    </div>
</section>

<!-- modal photos -->
<div class="l-modal-photos d-flex justify-content-center align-items-center js-modal-photos">
    
    <div class="l-modal-photos__overlay js-modal-photos-overlay"></div>
    <span class="l-modal-photos__close js-modal-photos-close">x</span>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8">

                <!-- swiper -->
                <div class="swiper-container js-swiper-modal-photos">

                    <div class="swiper-wrapper">
                        
                        <!-- slide -->
                        <?php
                            if( $images ) :
                                foreach( $images as $image ) :
                        ?>
                                    <div class="swiper-slide">
                                        <img
                                        class="l-modal-photos__image img-fluid w-100"
                                        src="<?php echo $image[ 'url' ]; ?>"
                                        alt="<?php the_title() ?>">
                                    </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-modal-photos u-color-folk-white js-swiper-button-prev-modal-photos"></div>
                <div class="swiper-button-next swiper-button-next-modal-photos js-swiper-button-next-modal-photos"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</div>
<!-- end modal photos -->

<!-- banner material -->
<?php echo get_template_part( 'template-parts/content', 'banner-material' ) ?>
<!-- end banner material -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>

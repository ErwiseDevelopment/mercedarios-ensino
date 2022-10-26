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
                    Com 60 anos de tradição, muitos passaram pelo nosso colégio, contribuindo para a construção de nossa história e outros ainda estão por vir.

                    Olhando para trás, podemos ver um longo caminho percorrido com trabalho árduo, muito estudo, esforço e muita dedicação.  E assim, podemos perceber o quão importante foi e é nossa instituição para a formação de nossos alunos.

                    O colégio está em constante movimento. A reflexão sobre os caminhos da educação, as novas possibilidades, a inovação e o contínuo aprimoramento dos professores e funcionários são fatores que nos levam ao objetivo final: a formação de pessoas conscientes de seus direitos e deveres, críticos e capazes de enfrentar o mercado de trabalho.

                    O colégio conta um uma estrutura adequada, salas amplas, quadra esportiva, parque, laboratórios de tecnologia educacional e de ciências, salão para eventos e muito espaço. 

                    Faça um tour 360º e conheça mais nossa estrutura física.
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

                                <?php for( $j = 0; $j < 2; $j++ ) { ?>
                                    <div class="col-12 l-photos__item-child d-flex justify-content-center align-items-center px-0">
                                        <a 
                                        class="l-photos__overlay"
                                        href="#">
                                            <img
                                            class="img-fluid w-100 h-100 u-object-fit-cover"
                                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                            alt="">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
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
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
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

<!-- banner material -->
<?php echo get_template_part( 'template-parts/content', 'banner-material' ) ?>
<!-- end banner material -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
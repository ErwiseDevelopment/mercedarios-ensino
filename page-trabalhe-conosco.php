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
                        Trabalhe conosco
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- form -->
<section class="mb-5 py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-11 px-lg-5">

                <div class="l-work__box bg-info px-3 py-5 px-lg-5">
                    
                    <div class="u-line-height-100 mb-4 pl-lg-4">

                        <p class="u-font-size-18 xl:u-font-size-24 xxl:u-font-size-28 u-font-weight-bold u-font-family-nunito u-color-folk-white mb-2 pl-2">
                            Tem interesse em trabalhar no   
                        </p>

                        <h4 class="u-font-size-32 xl:u-font-size-52 xxl:u-font-size-68 u-font-weight-bold u-font-family-nunito u-color-folk-yellow mb-2 pl-2">
                            Colégio Mercedário?
                        </h4>
                        
                        <p class="u-font-size-18 xl:u-font-size-24 xxl:u-font-size-28 u-font-weight-regular u-font-family-nunito u-color-folk-white mb-0 pl-2">
                            Envie seus dados e aguarde nosso contato!
                        </p>
                    </div>

                    <form>

                        <div class="row justify-content-center">

                            <div class="col-12 my-2 px-lg-5">
                                <input 
                                class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3"
                                type="text"
                                placeholder="Nome Completo*">
                            </div>

                            <div class="col-12 my-2 px-lg-5">
                                <input 
                                class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3"
                                type="email"
                                placeholder="E-mail*">
                            </div>

                            <div class="col-lg-6 my-2 pl-lg-5">
                                <input 
                                class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3"
                                type="text"
                                placeholder="Telefone">
                            </div>

                            <div class="col-lg-6 my-2 pr-lg-5">
                                <input 
                                class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3"
                                type="text"
                                placeholder="Whatsapp">
                            </div>

                            <div class="col-12 my-2 px-lg-5">
                                <input 
                                class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3"
                                type="text"
                                placeholder="Área que pretende atuar">
                            </div>

                            <div class="col-12 my-2 px-lg-5">
                                <textarea class="w-100 outline-0 border-0 d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-gray p-3" style="min-height:140px" placeholder="Mensagem"></textarea>
                            </div>
                            
                            <div class="col-lg-6 mt-2 mt-lg-3 pl-lg-5">
                                <label 
                                class="w-100 d-block u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito text-center u-color-folk-dark-marron hover:u-color-folk-yellow u-bg-folk-yellow hover:u-bg-folk-dark-marron u-cursor-pointer mb-0 py-3"
                                for="curriculo">
                                    Anexe seu currículo
                                </label>

                                <p class="u-font-size-20 u-font-weight-regular u-font-family-nunito text-center u-color-folk-white"></p>

                                <input 
                                class="d-none js-input-file"
                                type="file" 
                                id="curriculo">
                            </div>

                            <div class="col-lg-6 mt-2 mt-lg-3 mb-5 mb-lg-0 pr-lg-5">
                                <label 
                                class="w-100 d-block u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito text-center u-color-folk-dark-marron hover:u-color-folk-yellow u-bg-folk-yellow hover:u-bg-folk-dark-marron u-cursor-pointer mb-0 py-3"
                                for="foto">
                                    Anexe uma foto
                                </label>

                                <p class="u-font-size-20 u-font-weight-regular u-font-family-nunito text-center u-color-folk-white"></p>

                                <input 
                                class="d-none js-input-file"
                                type="file" 
                                id="foto">
                            </div>

                            <div class="col-4">
                                <input 
                                class="c-input-submit-float py-2"
                                type="submit"
                                value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end form -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

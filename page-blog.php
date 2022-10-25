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
                        Blog
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- search -->
<section class="pt-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <form
                method="GET"
                action="<?php echo get_home_url( null, '/' ) ?>">

                    <div class="row">

                        <div class="col-12">
                            <input 
                            class="c-search-field py-3 px-4"
                            type="text"
                            name="s"
                            placeholder="Pesquise um conteúdo">

                            <button
                            class="c-search-field__submit"
                            type="submit">
                                +
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end search -->

<!-- blog -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <!-- loop -->
            <?php for( $i = 0; $i < 6; $i++ ) { ?>
                <a 
                class="col-12 text-decoration-none my-3"
                href="#">

                    <div 
                    class="l-blog__box pt-3 pb-3 px-3 px-lg-0"
                    style="background-color:#9D1922">
                        <div class="row">

                            <div class="col-lg-7">
                                <img 
                                class="img-fluid w-100 h-100 u-object-fit-cover"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/blog-image-1.png" 
                                alt="Post 01">
                            </div>

                            <div class="col-lg-5 pt-4 pb-5 pl-lg-0 pr-lg-5">

                                <h3 class="u-font-size-22 xl:u-font-size-28 xxl:u-font-size-36 u-font-weight-bold u-font-family-nunito u-color-folk-white mt-2">
                                    5 sinais de que você
                                    precisa de uma escola 
                                    infantil católica
                                </h3>

                                <p class="u-font-size-15 xl:u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin magna nibh, blandit eu egestas efficitur, congue ut orci. Vestibulum dictum at elit id tempus. Donec at ligula feugiat, volutpat lorem a, aliquam nisl. Etiam [...]
                                </p>

                                <span class="l-blog__plus">+</span>
                            </div>
                        </div>
                    </div>
                </a>
            <?php } ?>
            <!-- end loop -->
        </div>
    </div>
</section>
<!-- end blog -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

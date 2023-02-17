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
                        Notícias
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
,
,
,

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

<!-- news -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_noticia', 'option' );
                        $request_posts = wp_remote_get( $post_link );
                      

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    
                    ?>
                        <div class="col-lg-4 my-3">

                            <a 
                            class="card h-100 border-0 rounded-0 text-decoration-none"
                            href="<?php echo get_home_url( null, 'noticia/?id=' . $rest_post->id )  ?>">

                                <div class="card-img w-100">
                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
										 style="height:230px"
                                        src="<?php echo $rest_post->featured_image_src; ?>"
                                        alt="<?php echo $rest_post->title->rendered; ?>">
                                </div>

                                <div 
                                class="card-body pr-5"
                                style="background-color:#9D1922">
                                    <h3 class="c-title-limit u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito u-color-folk-white">
                                     <?php echo $rest_post->title->rendered; ?>
                                    </h3>
                                </div>

                                <span 
                                class="u-line-height-100 position-absolute u-font-size-62 u-font-weight-extrabold u-font-family-nunito u-color-folk-yellow"
                                style="bottom:.5rem;right:.5rem">
                                    +
                                </span>
                            </a>
                        </div>
                        <?php 
                                endforeach;
                            endif;
                        endif;
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end news -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

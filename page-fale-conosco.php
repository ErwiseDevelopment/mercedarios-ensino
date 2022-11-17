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
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    <?php the_title() ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="my-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-md-6">
                        <?php echo do_shortcode( get_field('shortcode', 'option') ) ?>
                    </div>

                    <div class="col-md-5 offset-md-1 mt-5 mt-md-0">

                        <p class="u-font-weight-bold text-uppercase mb-0    ">
                            Endereço:
                        </p>

                        <span class="d-block u-font-size-12 mb-3">
                             <?php echo get_field('endereco', 'option')?>
                        </span>

                        <p class="u-font-weight-bold text-uppercase mb-0">
                            Telefone:
                        </p>

                        <span class="d-block u-font-size-12">
                            <?php echo get_field('telefone_cabecalho', 'option')?>
                        </span>

                        <p class="u-font-weight-bold text-uppercase mt-3 mb-0">
                            E-mail:
                        </p>

                        <span class="d-block u-font-size-12">
                         <?php echo get_field('e-mail_cabecalho', 'option')?>
                        </span>

                        <hr>

                        <p class="u-font-weight-bold text-uppercase">
                            nossas redes sociais
                        </p>

                        <ul 
                        class="d-flex justify-content-center justify-content-xl-start mb-0 pl-0">
                            
                            <?php if (!empty(get_field('spotify_redes', 'option'))):{?>
                            <li class="u-list-style-none pr-2">
                            <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__spotify rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('spotify_redes', 'option')?>" <?php if (get_field('nova_guia_stf', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Spotify
                                </a>
                            </li>
                            <?php } else: endif;?>   
                                <?php if (!empty(get_field('facebook_redes', 'option'))):{?>        
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Facebook
                                </a>
                            </li>
                             <?php } else: endif;?>     
                             <?php if (!empty(get_field('instagram_redes', 'option'))):{?>  
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Instagram
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('youtube_redes', 'option'))):{?>       
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white" rel="noreferrer noopener"
                                href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Youtube
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('whatsapp_redes', 'option'))):{?>       
                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-red" rel="noreferrer noopener"
                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Whatsapp
                                </a>
                            </li>
                            <?php } else: endif;?>   
                        </ul>
                    </div>
                </div>
            </div>

            
                <div class="col-12">
                        <?php echo get_field('mapa', 'option')?>
                    </div>
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

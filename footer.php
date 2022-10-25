<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <footer 
    class="u-bg-cover u-bg-no-repeat pt-5"
    style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/footer-background.png)">
        
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-12 mt-3">
                    
                    <div class="row justify-content-between">

                        <div class="col-lg-4 my-2 my-lg-0">

                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden pl-4">
                                Fale conosco
                            </h4>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__local before::u-font-size-20 u-font-weight-semibold u-color-folk-dark-golden"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                    Rua Nossa Senhora das Mercês, 1463 <br>
                                    Vila das Mercês - 04165-011 <br>
                                    São Paulo - SP
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__phone before::u-font-size-20 u-font-weight-semibold u-color-folk-dark-golden"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">                                     
                                    11 2947 5999 | 11 94290 3866
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__envelope before::u-font-size-20 u-font-weight-semibold u-color-folk-dark-golden"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                    mercedario.secretaria@gmail.com
                                </span>
                            </p>
                        </div>

                        <div class="col-lg-3 my-2 my-lg-0">

                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                Nossos Cursos
                            </h4>

                            <div class="d-flex">

                                <ul class="mb-0 pl-0">

                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="#">
                                            Educação Infantil
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="#">
                                            Ensino Fundamental
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="#">
                                            Ensino Médio
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="#">
                                            Intracurricular
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="#">
                                            Extracurricular
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2 my-lg-0">
                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                Links
                            </h4>

                            <ul class="mb-0 pl-0">
                                <li class="u-list-style-none mb-2">
                                    <a 
                                    class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                    href="#">
                                        Política de privacidade
                                    </a>
                                </li>

                                <li class="u-list-style-none mb-2">
                                    <a 
                                    class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                    href="#">
                                        Política de Cookies
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">

                <div class="col-lg-4 my-4 my-lg-0">

                    <ul class="d-flex justify-content-center justify-content-xl-start mb-0 pl-0">
                                    
                        <li class="u-list-style-none mr-2">
                            <a 
                            class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                            href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                Facebook
                            </a>
                        </li>

                        <li class="u-list-style-none mr-2">
                            <a 
                            class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                            href="<?php echo get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                Instagram
                            </a>
                        </li>

                        <li class="u-list-style-none mr-2">
                            <a 
                            class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                            href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                Youtube
                            </a>
                        </li>

                        <li class="u-list-style-none">
                            <a 
                            class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                            href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                Whatsapp
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-11 col-lg-4">
                    
                    <a
                    class="l-footer__box-logo"
                    href="<?php echo get_home_url( null, '/' ) ?>">
                        <div class="l-footer__radius py-4 px-5">
                            <img
                            class="img-fluid w-100 u-object-fit-cover"
                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/footer-logo.png"
                            alt="Colégio Mercedário Nossa Senhora das Mercês">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
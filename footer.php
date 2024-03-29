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
                                    <?php echo get_field('endereco', 'option')?>
                                    <!-- Rua Nossa Senhora das Mercês, 1463 <br>
                                    Vila das Mercês - 04165-011 <br>
                                    São Paulo - SP -->
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__phone before::u-font-size-20 u-font-weight-semibold u-color-folk-dark-golden"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">                                     
                                    <?php echo get_field('telefone_cabecalho', 'option')?> 
                                    <!-- 11 2947 5999 | 11 94290 3866 -->
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__envelope before::u-font-size-20 u-font-weight-semibold u-color-folk-dark-golden"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                    <?php echo get_field('e-mail_cabecalho', 'option')?>  
                                    <!-- mercedario.secretaria@gmail.com -->
                                </span>
                            </p>
                        </div>

                        <div class="col-lg-3 my-2 my-lg-0">

                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                 Etapas de Ensino
                            </h4>

                            <div class="d-flex">

                                <ul class="mb-0 pl-0">
                                            <?php
                                                $args = array(
                                                    'posts_per_page' => 7,
                                                    'post_type'      => 'curso',
                                                    'order'          => 'ASC'
                                                );

                                                $other_posts = new WP_Query( $args );

                                                if( $other_posts->have_posts()) :
                                                    while( $other_posts->have_posts()) : $other_posts->the_post();
                                            ?>
                                    <li class="u-list-style-none mb-2">
                                        <a 
                                        class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                        href="<?php the_permalink()?>">
                                            <?php the_title()?>
                                        </a>
                                    </li>
                                    <?php
							endwhile;
						endif;
						
						wp_reset_query();
					?>
                                </ul>
                            </div>
                        </div>
                        <?php if (!empty(get_field('privacidade', 'option')) || !empty(get_field('privacidade', 'option'))) :{?> 
                        <div class="col-lg-4 my-2 my-lg-0">
                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                Links
                            </h4>

                            <ul class="mb-0 pl-0">
                            <?php if (!empty(get_field('privacidade', 'option'))):{?> 
                                <li class="u-list-style-none mb-2">
                                    <a 
                                    class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                    href="<?php echo  get_field('privacidade', 'option')?>">
                                        Política de privacidade
                                    </a>
                                </li>
                                <?php }  endif;?>
                                <?php if (!empty(get_field('cookies', 'option'))):{?> 
                                <li class="u-list-style-none mb-2">
                                    <a 
                                    class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white"
                                    href="<?php echo  get_field('cookies', 'option')?>">
                                        Política de Cookies
                                    </a>
                                </li>
                                <?php }  endif;?>
                            </ul>
                        </div>
                        <?php }  endif;?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end"> 
                <div class="col-lg-4 my-4 my-lg-0">

                        <div class="d-flex justify-content-between justify-content-lg-center mb-0 px-5 px-lg-0">
                            <p class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden"><?php echo get_field('escola1', 'option')?></p>
                        </div> 
               
                        <ul class="d-flex justify-content-center justify-content-xl-start mb-0 pl-0">
                            
                            <?php if (!empty(get_field('spotify_redes', 'option'))):{?>
                            <li class="u-list-style-none pr-2">
                            <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__spotify rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('spotify_redes', 'option')?>" <?php if (get_field('nova_guia_stf', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Spotify
                                </a>
                            </li>
                            <?php }  endif;?>   
                                <?php if (!empty(get_field('facebook_redes', 'option'))):{?>        
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Facebook
                                </a>
                            </li>
                             <?php } endif;?>     
                             <?php if (!empty(get_field('instagram_redes', 'option'))):{?>  
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                 href="<?php echo "https://instagram.com/" .get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Instagram
                                </a>
                            </li>
                            <?php }endif;?>   
                            <?php if (!empty(get_field('youtube_redes', 'option'))):{?>       
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                                href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Youtube
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('whatsapp_redes', 'option'))):{?>       
                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"                                
                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Whatsapp
                                </a>
                            </li>
                            <?php } endif;?>   
                        </ul>
                
               
                         <div class="d-flex justify-content-between justify-content-lg-center mb-0 px-5 px-lg-0">
                            <p class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden"><?php echo get_field('escola2', 'option')?></p>
                        </div>                    
                        <ul class="d-flex justify-content-center justify-content-xl-start mb-0 pl-0">
                            
                            <?php if (!empty(get_field('spotify_redes_2', 'option'))):{?>
                            <li class="u-list-style-none pr-2">
                            <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__spotify rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('spotify_redes_2', 'option')?>" <?php if (get_field('nova_guia_stf_2', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Spotify
                                </a>
                            </li>
                            <?php }  endif;?>   
                                <?php if (!empty(get_field('facebook_redes_2', 'option'))):{?>        
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('facebook_redes_2', 'option')?>" <?php if (get_field('nova_guia_face_2', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Facebook
                                </a>
                            </li>
                             <?php } endif;?>     
                             <?php if (!empty(get_field('instagram_redes_2', 'option'))):{?>  
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('instagram_redes_2', 'option')?>" <?php if (get_field('nova_guia_insta_2', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Instagram
                                </a>
                            </li>
                            <?php }endif;?>   
                            <?php if (!empty(get_field('youtube_redes_2', 'option'))):{?>       
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"
                                href="<?php echo get_field('youtube_redes_2', 'option')?>" <?php if (get_field('nova_guia_yt_2', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Youtube
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('whatsapp_redes_2', 'option'))):{?>       
                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-dark-golden hover:u-bg-folk-white" rel="noreferrer noopener"                                
                                href="<?php echo get_field('whatsapp_redes_2', 'option')?>" <?php if (get_field('nova_guia_wpp_2', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Whatsapp
                                </a>
                            </li>
                            <?php } endif;?>   
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
            <div class="col-12">
                        
                        <div class="row">

                            <div class="col-lg-8 d-flex align-items-center">
                                <p class="u-line-height-100 u-font-weight-semibold text-center text-md-left u-color-folk-white mb-0" style= "font-size: 13px;">
                                <?php echo get_field('rodape_ass', 'option') ?> © <?php echo date('Y'); ?> TODOS OS DIREITOS RESERVADOS.
                                </p>
                            </div>

                            <div class="col-lg-4">
                            
                                <div class="row">

                                    <div class="col-6">
                                        <a 
                                        href="https://www.dominuscomunicacao.com/" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/dominus.png"
                                            alt="Dominus">
                                        </a>
                                    </div>

                                    <div class="col-6">
                                        <a 
                                        href="https://www.erwise.com.br" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/erwise.png"
                                            alt="Erwise">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
<section class="py-3">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-end">

                    <div class="col-lg-6 mb-3 mb-lg-0">

                        <div class="row justify-content-center">

                            <div class="col-8">

                                
                                    <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                        <img 
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_field('logo', 'option'); ?>" 
                                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                    </a>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">

                        <div class="row">
                        <?php if (!empty(get_field('acesso_restrito', 'option'))):{?>
                            <div class="col-12 mb-4 mb-lg-2 px-5">
                                <a
                                class="w-100 d-block u-font-size-14 u-font-weight-bold u-font-fmaily-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-very-light-yellow py-2"
                                href="<?php echo get_field('acesso_restrito')?>" <?php if (get_field('nova_guia_acesso', 'option') == '1') :?>  target="_blank" <?php endif; ?> >
                                    Acesso Restrito
                                </a>
                            </div>
                        </div>
                        <?php } endif;?>

                        <div>
                            <ul class="d-flex justify-content-between justify-content-lg-center mb-0 px-5 px-lg-0">
                            <?php if (!empty(get_field('facebook_redes', 'option'))):{?>
                                <li class="u-list-style-none mr-2">
                                    <a
                                    class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden" rel="noreferrer noopener"                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"
                                    href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        Link do Facebook
                                    </a>
                                </li>
                            <?php } endif;?>
                            <?php if (!empty(get_field('instagram_redes', 'option'))):{?>
                                <li class="u-list-style-none mr-2">
                                    <a
                                    class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden" rel="noreferrer noopener"                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"
                                    href="<?php echo get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        Link do Instagram
                                    </a>
                                </li>
                            <?php } endif;?>
                            <?php if (!empty(get_field('youtube_redes', 'option'))):{?>             
                                <li class="u-list-style-none mr-2">
                                    <a
                                    class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden" rel="noreferrer noopener"                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"
                                    href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"                                    target="_blank"
                                    rel="noreferrer noopener">
                                        Link do Youtube
                                    </a>
                                </li>
                            <?php } endif;?>
                            <?php if (!empty(get_field('whatsapp_redes', 'option'))):{?>                    
                                <li class="u-list-style-none mr-2">
                                    <a
                                    class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden" rel="noreferrer noopener"                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"
                                    href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener"
                                    target="_blank"
                                    rel="noreferrer noopener">
                                        Link do Whatsapp
                                    </a>
                                </li>
                            <?php } endif;?> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
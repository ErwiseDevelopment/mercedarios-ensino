<section class="pb-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-md-8 col-lg-6">

                        <div        
                        class="l-newsletter__box h-100 d-flex align-items-center py-5 py-lg-4 px-3 px-lg-5">
                            
                            <div class="position-relative px-3">

                                <p class="u-font-size-24 xxl:u-font-size-28 u-font-weight-bold u-font-family-nunito u-color-folk-white mb-0">
                                    Inscreva-se em nossa
                                </p>

                                <h3 class="u-font-size-54 xxl:u-font-size-68 u-font-weight-bold u-font-family-nunito u-color-folk-yellow">
                                    Newsletter
                                </h3>

                                <p class="u-line-height-100 u-font-size-24 xxl:u-font-size-28 u-font-weight-regular u-font-family-nunito u-color-folk-white">
                                    E receba conteúdos exclusivos <br>
                                    de nossa escola!
                                </p>

                                <form>

                                    <div class="row justify-content-center">

                                        <div class="col-12 my-2">
                                            <input 
                                            class="w-100 u-border-1 u-border-color-dark-golden d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-bold-gray py-3 px-4"
                                            type="text"
                                            placeholder="Nome">
                                        </div>

                                        <div class="col-12 my-2">
                                            <input 
                                            class="w-100 u-border-1 u-border-color-dark-golden d-block u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-nunito u-color-folk-bold-gray py-3 px-4"
                                            type="email"
                                            placeholder="E-mail">
                                        </div>

                                        <div class="col-10 col-lg-8 mt-4">
                                            <input 
                                            class="w-100 border-0 outline-0 shadow-sm rounded-pill d-block u-font-size-18 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito text-center u-color-folk-bold-marron u-bg-folk-light-yellow py-3 px-4"
                                            type="submit"
                                            value="Enviar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 pt-5 pt-lg-3">
                        
                        <p class="u-font-weight-bold u-font-family-nunito">
                            <span class="u-line-height-100 d-block u-font-size-22 xxl:u-font-size-28 u-color-folk-dark-marron">Acompanhe-nos</span>
                            <span class="u-line-height-100 u-font-size-52 xxl:u-font-size-68 u-color-folk-light-yellow">nas redes</span>
                        </p>

                        <a
                        class="d-flex align-items-center text-decoration-none mb-4"
                        href="#">
                            <div>
                                <span 
                                class="u-icon__brands u-icon__instagram shadow-sm rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-32 text-decoration-none u-color-folk-white u-bg-folk-bold-marron"
                                style="width:58px;height:58px">
                                    Link do icon__instagram
                                </span>
                            </div>
                            <?php $instagram = get_field('instagram_redes', 'option');
                            list($http, $user) = explode("/", $instagram)
                            
                            ?>
                            <div class="pl-2">
                                <p class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-nunito u-color-folk-bold-marron mb-0">
                                    @ . <?php echo $user; ?>
                                </p>

                                <p class="u-font-size-15 xxl:u-font-size-18 u-font-weight-regular u-font-family-nunito u-color-folk-very-gray mb-0">
                                    #colegiomercedario
                                </p>
                            </div>
                        </a>

                        <div class="row">

                            <?php for( $i = 0; $i < 4; $i++ ) { ?>
                                <div class="col-md-6 mt-3">
                                    <img 
                                    class="img-fluid w-100 u-objet-fit-cover"
                                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/instagram-1.png" 
                                    alt="Instagram 1">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
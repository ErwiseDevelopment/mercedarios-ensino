<section 
class="overflow-hidden py-5"
style="background-color:#F1F1F1">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-11 col-lg-5">
                        <h3 class="c-title-pattern py-4">
                            Notícias
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-12 py-5 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-news">

                    <div class="swiper-wrapper justify-content-start">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 10; $i++ ) { ?>
                            <div class="swiper-slide justify-content-start">

                                <a 
                                class="card text-decoration-none"
                                href="#">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/news-image-1.png"
                                        alt="Post 01">
                                    </div>
 
                                    <div 
                                    class="card-body"
                                    style="background-color:#871619">
                                        <h3 class="u-font-size-22 u-font-weight-bold u-font-family-nunito text-white">
                                            Maternal e Jardim I realizam atividade
                                            com a temática “Companhia”
                                        </h3>

                                        <span 
                                        class="u-line-height-100 position-absolute u-font-size-52 u-font-weight-extrabold u-font-family-nunito u-color-folk-light-yellow"
                                        style="bottom:1rem;right:1rem">+</span>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
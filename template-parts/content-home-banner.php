<section 
class="u-border-color-dark-marron" 
style="border-top:20px solid">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-banner">

                    <div class="swiper-wrapper">

                        <!-- swiper -->
                        <?php for( $i = 0; $i < 3; $i++ ) { ?>
                            <a 
                            class="swiper-slide"
                            href="#">
                                <img 
                                class="img-fluid w-100 u-object-fit-cover"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-1.png" 
                                alt="Banner">
                            </a>
                        <?php } ?>
                        <!-- end swiper -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
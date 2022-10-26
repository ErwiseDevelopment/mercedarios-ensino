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
                        <?php if(have_rows('imagem_destaque','option')) :
                                while (have_rows('imagem_destaque','option')) : the_row();
                             ?>
                            <a 
                            class="swiper-slide"
                            href="<?php echo get_sub_field('link_repetdor', 'option')?>">
                                <img 
                                class="img-fluid w-100 u-object-fit-cover"
                                src="<?php echo get_sub_field('banner_repetidor', 'option')?>"
                                alt="Banner">
                            </a>
                        <?php endwhile; endif;?>
                        <!-- end swiper -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<section class="mb-4 py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-11 col-lg-5 offset-lg-1">
                        <h3 class="c-title-pattern py-4">
                            <?php echo get_field('titulo')?>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5 pt-4">

                <div class="row justify-content-center">
                <?php 
                if(have_rows('icones')) :
                        while (have_rows('icones')) : the_row();
                
                ?>
                    <a 
                    class="l-our-differences__col"
                    href="<?php echo get_sub_field('link_icon');?>">

                        <div class="l-our-differences__item">
                            <img 
                            class="img-fluid w-100 u-object-fit-cover"
                            src="<?php echo get_sub_field('icone_c_fundo')?>" 
                            alt="Aulas de inglês">
                        </div>

                        <div class="l-our-differences__item">
                            <h4 class="u-font-size-22 xxl:u-font-size-24 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-dark-marron">
                                <?php echo get_sub_field('titulo_icon')?>
                            </h4>
                        </div>
                    </a>
                    <?php endwhile; endif;?>
                </div>

                <div class="row justify-content-center">

                    <div class="col-10 col-lg-4 mt-5 pt-4">
                        <a
                        class="w-100 rounded-pill d-block u-font-size-16 lg:u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-marron hover:u-color-folk-white u-bg-folk-light-yellow hover:u-bg-folk-dark-marron py-2"
                        href="<?php get_field('link_visita')?>">
                            Quero fazer uma visita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
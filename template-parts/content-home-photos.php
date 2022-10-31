<section class="mb-5 pb-5">

    <div class="container-fluid">

        <div class="row">

            <!-- desktop -->
            <div class="col-12 d-none d-lg-block">

                <div class="row">
                     
                    <!-- loop -->
                    <?php 
                        $posts_count = 1;
                        
                        for( $i = 0; $i < 4; $i++ ) { 
                    ?>
                            <div class="col-lg-3 l-photos__col-child">

                                <div class="row">

                                    <!-- item -->
                                    <?php
                                        $args = array(
                                            'posts_per_page' => 8,
                                            'post_type'      => 'galeria',
                                            'order'          => 'DESC'
                                        );

                                        $galleries = get_posts( $args );
                                        
                                        $count = count($galleries);
                                        $chunk = array_chunk($galleries, ceil($count / 4));

                                        foreach( $chunk[$i] as $item ) :
                                            setup_postdata($item);
                                    ?>  
                                            <div class="col-12 l-photos__item-child d-flex justify-content-center align-items-center px-0">
                                                <a 
                                                class="l-photos__overlay"
                                                href="<?php echo get_home_url( null, '/' . $item->post_type . '/' . $item->post_name ); ?>">
                                                    <img
                                                    class="img-fluid w-100 h-100 u-object-fit-cover"
                                                    src="<?php echo get_field( 'capa_do_album', $item->ID ); ?>"
                                                    alt="<?php echo $item->post_title; ?>">
                                                </a>
                                            </div>
                                    <?php
                                        endforeach;
                                    ?>
                                <!-- end item -->
                                </div>
                            </div>
                    <?php  
                            if( $posts_count == 8 )
                                break;
                        } 
                    ?>
                    <!-- end loop -->
                </div>
            </div>
            <!-- end desktop -->

            <!-- mobile -->
            <div class="col-12 d-lg-none px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-photos">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            if( $galeries->have_posts() ) :
                                while( $galeries->have_posts() ) : $galeries->the_post();
                        ?> 
                                    <div class="swiper-slide">
                                        <a 
                                        class="l-photos__overlay"
                                        href="<?php the_permalink() ?>">
                                            <img
                                            class="img-fluid w-100 h-100 u-object-fit-cover"
                                            src="<?php echo get_field( 'capa_do_album' ) ?>"
                                            alt="<?php the_title() ?>">
                                        </a>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                            
                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
            <!-- end mobile -->

            <div class="col-12 px-0">
                <p class="u-font-size-16 lg:u-font-size-22 xxl:u-font-size-30 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron mb-0 py-2">
                    Há 60 anos escrevendo um futuro promissor
                </p>
            </div>

            <div 
            class="col-12 py-4 px-0"
            style="background-color:#F1F1F1">
                
                <div class="row justify-content-center mx-0">

                    <div class="col-9 col-lg-3">
                        <a
                        class="w-100 rounded-pill d-block u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-bold-marron hover:u-color-folk-white u-bg-folk-light-yellow hover:u-bg-folk-dark-marron py-2"
                        href="#">
                            Confira nossas fotos!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
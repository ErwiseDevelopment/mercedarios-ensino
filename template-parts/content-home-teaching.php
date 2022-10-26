<section class="l-teaching mt-5 pt-5 py-lg-5">

    <div class="container">

        <div class="row">

            <div class="col-12 mt-5 pt-5">

                <div class="row justify-content-center">

                    <?php
						$args = array(
							'posts_per_page' => 3,
							'post_type'      => 'curso',
							'order'          => 'ASC'
						);

						$other_posts = new WP_Query( $args );

						if( $other_posts->have_posts()) :
							while( $other_posts->have_posts()) : $other_posts->the_post();
					?>
                                <div class="col-md-6 col-lg-4 l-teaching__col-child">

                                    <a
                                    class="card border-0 text-decoration-none"
                                    href="<?php the_permalink() ?>">       
                                        <div class="card-img">
                                            <img 
                                            class="img-fluid w-100 u-object-fit-cover"
                                            src="<?php echo get_field( 'imagem_home' ) ?>" 
                                            alt="<?php the_title() ?>">
                                        </div>

                                        <div class="card-body px-5">

                                            <div class="l-teaching__box d-flex justify-content-center align-items-end pb-3">
                                                <h3 class="u-font-size-22 xxl:u-font-size-28 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white">
                                                    <?php the_title() ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    <?php
							endwhile;
						endif;
						
						wp_reset_query();
					?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section
class="u-border-color-dark-marron u-bg-cover u-bg-no-repeat py-5" 
style="border-top:20px solid;background-image:url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-title.png)">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="d-flex justify-content-center align-items-center">
                    <img 
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-plus-title.png" 
                    alt="Ícone mais">

                    <h1 class="d-inline-block u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white mb-0 ml-3">
                        Atividades Extracurriculares
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- contents -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <!-- loop -->
            <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'curso',
                    'order'          => 'DESC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'tipo',
                            'field'    => 'ID',
                            'terms'    => 49,
                        )
                    )
                );
            
                $posts_extra = new WP_Query( $args );
                $count_slide = -1;

                if( $posts_extra->have_posts()) :
                    while( $posts_extra->have_posts()) : $posts_extra->the_post();
                        $count_slide++;        
            ?>
                        <div class="col-12 my-5 my-lg-4">

                            <div class="row">

                                <div class="col-lg-6">

                                    <div 
                                    class="h-100"
                                    style="background-color:#8A1719">
                                        <img
                                        class="img-fluid w-100 h-100 u-object-fit-cover"
                                        style="border-top-left-radius:100px;border-bottom-right-radius:100px"
                                        src="<?php echo get_field('imagem_destaque_extra')?>"
                                        alt="Atividade">
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    <h4 class="u-font-size-32 xl:u-font-size-42 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito u-color-folk-bold-marron mb-4">
                                        <?php the_title()?>
                                    </h4>

                                    <span class="d-block u-font-size-18 xl:u-font-size-20 xxl:u-font-size-24 u-font-weight-semibold u-font-family-nunito u-color-folk-dark-gray">
                                        <?php echo get_field( 'descricao_extra' ) ?>
                                    </span>
                                </div>

                                <div class="col-12 mt-4">
                            
                                    <!-- swiper -->
                                    <div class="swiper-container js-swiper-activities-all js-swiper-activities-<?php echo $count_slide; ?>">
                                
                                        <div class="swiper-wrapper">
                                            <?php
                                                $images = get_field( 'galeria' );
                                                $count = -1;

                                                if( $images ) :
                                                    foreach( $images as $image ) :
                                                        $count++
                                            ?>  
                                                        <div class="swiper-slide l-photos__overlay js-photos" data-value=<?php echo $count; ?>>
                                                            <img
                                                            class="img-fluid w-100 h-100 u-object-fit-cover"
                                                            src="<?php echo $image[ 'url' ]; ?>"
                                                            alt="Atividade"> 
                                                        </div> 
                                            <?php 
                                                    endforeach;
                                                endif; ?>
                                        </div>
                                    </div>

                                    <!-- navigation -->
                                    <div class="swiper-button-prev swiper-button-prev-activities js-swiper-button-prev-activities-<?php echo $count_slide; ?>"></div>
                                    <div class="swiper-button-next swiper-button-next-activities js-swiper-button-next-activities-<?php echo $count_slide; ?>"></div>
                                    <!-- end swiper -->
                                </div>
                            </div>
                        </div>
            <?php 
                    endwhile;
                endif; 

                wp_reset_query();
            ?>
            <!-- end loop -->
        </div>
    </div>
</section>
<!-- end contents -->

<!-- other posts -->
<section class="l-teaching has-not-center mb-5 py-5">

	<div class="container">

		<div class="row">

			<div class="col-12 mt-3 mb-5 pb-4">

				<h3 class="u-font-size-42 xl:u-font-size-52 xxl:u-font-size-62 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-dark-marron">
					Veja também:
				</h3>
			</div>

			<div class="col-12 mt-5 pt-5">

				<div class="row justify-content-center">

					<!-- loop -->
					<?php
						$args = array(
							'posts_per_page' => 3,
							'post_type'      => 'curso',
							'order'          => 'ASC',
						    'post__not_in'   => array (get_the_ID()),
						);

						$other_posts = new WP_Query( $args );

						if( $other_posts->have_posts()) :
							while( $other_posts->have_posts()) : $other_posts->the_post();
					?>
								<div class="col-4 l-teaching__col-child">
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
												<h3 class="u-font-size-22 xxl:u-font-size-28  u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white">
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
					<!-- end loop -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end other posts -->

<!-- banner material -->
<?php echo get_template_part( 'template-parts/content', 'banner-material' ) ?>
<!-- end banner material -->

<!-- modal photos -->
<div class="l-modal-photos d-flex justify-content-center align-items-center js-modal-photos">
    
    <div class="l-modal-photos__overlay js-modal-photos-overlay"></div>
    <span class="l-modal-photos__close js-modal-photos-close">x</span>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8">

                <!-- swiper -->
                <div class="swiper-container js-swiper-modal-photos">

                    <div class="swiper-wrapper">
                        
                        <!-- slide -->
                        <?php
                            if( $images ) :
                                foreach( $images as $image ) :
                        ?>
                                    <div class="swiper-slide">
                                        <img
                                        class="l-modal-photos__image img-fluid w-100"
                                        src="<?php echo $image[ 'url' ]; ?>"
                                        alt="<?php the_title() ?>">
                                    </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-modal-photos u-color-folk-white js-swiper-button-prev-modal-photos"></div>
                <div class="swiper-button-next swiper-button-next-modal-photos js-swiper-button-next-modal-photos"></div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</div>
<!-- end modal photos -->


<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        Cursos
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-6 pr-0">

						<div class="l-single-course__box-image">
							<img 
							class="img-fluid w-100 u-object-fit-cover"
							src="<?php echo get_field( 'imagem_destaque_curso' ) ?>" 
							alt="<?php the_title() ?>">               
						</div>
					</div>

					<div class="col-6 d-flex align-items-center pl-0">

						<div class="l-single-course__box-content py-4 px-5">
							<h1 class="u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito u-color-folk-bold-marron mb-0">
								<?php the_title() ?>
							</h1>

							<span class="d-block u-font-size-16 xl:u-font-size-20 xxl:u-font-size-24 u-font-weight-semibold all:u-font-family-nunito u-color-folk-dark-gray">
								<?php echo get_field( 'resumo_cursos' ) ?>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 mt-4">
				<span class="d-block u-font-size-16 xl:u-font-size-20 xxl:u-font-size-24 u-font-weight-semibold all:u-font-family-nunito u-color-folk-dark-gray">
					<?php echo get_field( 'descricao_curso' ) ?>
				</span>
			</div>
		</div>
	</div>
</section>
<!-- end content -->

<!-- other posts -->
<section class="l-teaching has-not-center mb-5 py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row justify-content-center">

					<div class="col-11 col-lg-5">
						<h3 class="c-title-pattern py-4">
							Calendário 2022
						</h3>
					</div>
				</div>
			</div>

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
							'posts_per_page' => 2,
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

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

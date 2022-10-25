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
                        Notícias
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- post -->
<section class="py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<?php
					$alt_title = get_the_title();

					the_post_thumbnail( 'post-thumbnail',
						array(
							'class' => 'img-fluid w-100 u-object-fit-cover',
							'alt'   => $alt_title
						));
				?>

				<p class="u-font-size-15 u-font-size-18 xl:u-font-size-22 xxl:u-font-size-28 u-font-weight-bold u-font-family-lato u-color-folk-bold-marron mt-3 mb-0">
					15 de março, 2022
				</p>

				<p class="mb-2">
					<span class="u-font-size-22 xl:u-font-size-28 xxl:u-font-size-36 u-font-weight-bold u-font-family-lato u-color-folk-very-gray">Por:</span> <span class="u-font-size-18 xl:u-font-size-24 xxl:u-font-size-30 u-font-weight-regular u-font-family-lato u-color-folk-bold-marron">Secretaria</span>
				</p>

				<h1 class="u-line-height-100 u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito u-color-folk-bold-marron mb-4"> 
					<?php the_title() ?>
				</h1>

				<span class="d-block u-font-size-15 xl:u-font-size-18 xxl:u-font-size-22 u-font-weight-semibold all:u-font-family-nunito u-color-folk-dark-gray">
					<?php the_content() ?>
				</span>
			</div>
		</div>
	</div>
</section>
<!-- end post -->

<!-- other posts -->
<section 
class="u-border-color-dark-marron mb-5 pb-5"
style="border-top:5px solid;">

	<div class="container">

		<div class="row">

			<div class="col-12 pt-5">

				<div class="row">

					<?php for( $i = 0; $i < 4; $i++ ) { ?>
						<div class="col-lg-3 my-3 my-lg-0">
							<a 
							class="card border-0 rounded-0 text-decoration-none"
							href="#">

								<div class="card-img w-100">
									<img
									class="img-fluid w-100 u-object-fit-cover"
									src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/post-image-1.png"
									alt="Post Image 1">
								</div>

								<div 
								class="card-body pr-5"
								style="background-color:#9D1922">
									<h3 class="u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito u-color-folk-white">
										Maternal e Jardim I realizam
										atividade com a temática 
										“Companhia”
									</h3>
								</div>

								<span 
								class="u-line-height-100 position-absolute u-font-size-58 u-font-weight-extrabold u-font-family-nunito u-color-folk-yellow"
								style="bottom:.5rem;right:.5rem">
									+
								</span>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end other posts -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

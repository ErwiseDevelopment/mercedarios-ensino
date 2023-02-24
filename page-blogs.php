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
                        Blog
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
		<?php

if(empty($_GET['id'])) {
    echo "<script>window.location.href='" . get_home_url(null, 'blog') . "';</script>";
    exit();
}
$request_posts = wp_remote_get($post_link);

if (!is_wp_error($request_posts)) {
    $response_code = wp_remote_retrieve_response_code($request_posts);

    if ($response_code === 404) {
        echo 'Post não encontrado';
        exit();
    }
}
$body = wp_remote_retrieve_body( $request_posts );
$data = json_decode( $body );


    //pega o id da pagina/post
 if( isset($_GET['id']))
 $id_url = $_GET['id'];


    //url principal do site
     $link_pattern = get_field( 'link_padrao_portal', 'option' );
    // echo $link_pattern;
     //concatena o link pricipal+o caminho das postagens
    $post_link = $link_pattern . "wp-json/wp/v2/posts/$id_url";
//	echo $post_link;
     //faz a requisição com o site no caminho digitado acima
     $request_posts = wp_remote_get( $post_link );
	 if(!is_wp_error( $request_posts )) {
        $response_code = wp_remote_retrieve_response_code($request_posts);

		if (!is_wp_error($request_posts)) {
			$response_code = wp_remote_retrieve_response_code($request_posts);
			if ($response_code === 404) {
				include '404.php'; // aqui você pode inserir o caminho do arquivo que deseja incluir
				exit();
			}
		}
	}
     if(!is_wp_error( $request_posts )) :
   $body = wp_remote_retrieve_body( $request_posts );
   $data = json_decode( $body );
//    echo "<pre>";
// 	var_dump($data);
// 	echo "</pre>";
   if(!is_wp_error( $data )) :
    //    foreach( $data as $rest_post ) :
	
?>
			<div class="col-12">

								<div class="card-img w-100">
                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    src="<?php echo $data->featured_image_src; ?>"
                                        alt="<?php echo $data->title->rendered; ?>">
                                </div>

				<p class="u-font-size-15 u-font-size-18 xl:u-font-size-22 xxl:u-font-size-28 u-font-weight-bold u-font-family-lato u-color-folk-bold-marron mt-3 mb-0"> Postado em :
					<?php $date_post = $data->date;
					   list($data_year, $data_month, $data_day) = explode("-", $date_post);
					   list($data_day1) = explode("T", $data_day);
					 echo $data_day1 . '/' . $data_month . '/' . $data_year; ?>
				</p>

				<!-- <p class="mb-2">
					<span class="u-font-size-22 xl:u-font-size-28 xxl:u-font-size-36 u-font-weight-bold u-font-family-lato u-color-folk-very-gray">
						Por:</span> <span class="u-font-size-18 xl:u-font-size-24 xxl:u-font-size-30 u-font-weight-regular u-font-family-lato u-color-folk-bold-marron">Secretaria</span>
				</p> -->

				<h1 class="u-line-height-100 u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito u-color-folk-bold-marron mb-4"> 
					<?php echo $data->title->rendered; ?>
				</h1>

				<span class="d-block u-font-size-15 xl:u-font-size-18 xxl:u-font-size-22 u-font-weight-semibold all:u-font-family-nunito u-color-folk-dark-gray">
					<?php echo $data->content->rendered;  ?>
				</span>
			</div>
			<?php endif;
			endif;?>
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

				<?php
                        $link_pattern = get_field( 'link_padrao_portal', 'option' );
                        $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_blog', 'option' );
                        $request_posts = wp_remote_get( $post_link );
                        $count = 0;

                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
									
                                    if($id_url <> $rest_post->id) :
										$count++;
										
                    ?>
						<div class="col-lg-3 my-3 my-lg-0">
							<a 
							class="card border-0 rounded-0 text-decoration-none"
							href="<?php echo get_home_url( null, 'blog/?id=' . $rest_post->id )  ?>">

								<div class="card-img w-100">
									<img
									class="img-fluid w-100 u-object-fit-cover"
									src="<?php echo $rest_post->featured_image_src; ?>"
                                     alt="<?php echo $rest_post->title->rendered; ?>">
								</div>

								<div 
								class="card-body pr-5"
								style="background-color:#9D1922">
									<h3 class="u-font-size-14 xxl:u-font-size-18 u-font-weight-bold u-font-family-nunito u-color-folk-white">
										<?php echo $rest_post->title->rendered; ?>
									</h3>
								</div>

								<span 
								class="u-line-height-100 position-absolute u-font-size-58 u-font-weight-extrabold u-font-family-nunito u-color-folk-yellow"
								style="bottom:.5rem;right:.5rem">
									+
								</span>
							</a>
						</div>
						<?php 
						if ( $count == 4)
							break;		
		
                            endif;    
							endforeach;
                            endif;
                        endif;
						
                    ?>
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

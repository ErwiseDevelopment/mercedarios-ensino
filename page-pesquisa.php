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

<section>

    <div class="container">

        <div class="row">

            <!-- loop -->
            <?php
                if( isset($_GET['p'] ) )
                    $search = $_GET['p'];

                $link_pattern = get_field( 'link_padrao_portal', 'option' ) . '/wp-json/wp/v2/posts';
                // $post_news = $link_pattern . get_field( 'link_noticia', 'option');
                $request_posts = wp_remote_get( $link_pattern );

                if(!is_wp_error( $request_posts )) :
                    $body = wp_remote_retrieve_body( $request_posts );
                    $data = json_decode( $body );

                    if(!is_wp_error( $data )) :
                        foreach( $data as $rest_post ) :
                                
                            if( $search ) :
                                echo $search ;
                               if(strstr($rest_post->title->rendered, $search)) :    
                                echo 'if';
            ?>
                <section class="py-5">

                <div class="container">

                    <div class="row">

                        <div class="col-12">

                            <div class="row">

                            
                                    <div class="col-lg-4 my-3">

                                        <a 
                                        class="card h-100 border-0 rounded-0 text-decoration-none"
                                        href="<?php echo get_home_url( null, 'noticia/?id=' . $rest_post->id )  ?>">

                                            <div class="card-img w-100">
                                                <img
                                                class="img-fluid w-100 u-object-fit-cover"
                                                    style="height:230px"
                                                    src="<?php echo $rest_post->featured_image_src; ?>"
                                                    alt="<?php echo $rest_post->title->rendered; ?>">
                                            </div>

                                            <div 
                                            class="card-body pr-5"
                                            style="background-color:#9D1922">
                                                <h3 class="c-title-limit u-font-size-20 xxl:u-font-size-24 u-font-weight-bold u-font-family-nunito u-color-folk-white">
                                                <?php echo $rest_post->title->rendered; ?>
                                                </h3>
                                            </div>

                                            <span 
                                            class="u-line-height-100 position-absolute u-font-size-62 u-font-weight-extrabold u-font-family-nunito u-color-folk-yellow"
                                            style="bottom:.5rem;right:.5rem">
                                                +
                                            </span>
                                        </a>
                                    </div>
                <!-- end loop -->
                            </div>
                        </div>
                    </div>
                </div>
</section>
                                   
            <?php           
                                endif;
                            else: echo 'else';
                            endif;
                        endforeach;
                    endif; 
                endif; 
            ?>
            <!-- end loop -->
        </div>
    </div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();

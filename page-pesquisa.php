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
            //    $email  = 'Os veneráveis da Ordem Mercedária: quem são eles' . '<br>';
            //    $domain = strstr($email, 'Ordem');
               
            //    if(strstr($email, $domain)) {
            //        echo 'IF<br>';
            //    } else {
            //        echo 'ELSE<br>';
            //    }

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
                                if(strstr($rest_post->title->rendered, $search)) :    
            ?>
                                    <div class="col-12 my-3">

                                        <div class="row">

                                            <div class="col-4">
                                                <img 
                                                class="img-fluid w-100"
                                                src="<?php echo $rest_post->featured_image_src; ?>"
                                                alt="">
                                            </div>

                                            <div class="col-8">
                                                <h3>
                                                    <strong>Título:</strong> <?php echo $rest_post->title->rendered; ?>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
            <?php           
                                endif;
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

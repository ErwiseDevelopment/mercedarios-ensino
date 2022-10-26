<section 
class="overflow-hidden py-5"
style="background-color:#F1F1F1">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-center">

                    <div class="col-11 col-lg-5">
                        <h3 class="c-title-pattern py-4">
                            Notícias
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-12 py-5 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-news">

                    <div class="swiper-wrapper justify-content-start">

                        <!-- slide -->
                        <?php
                            $link_pattern = get_field( 'link_padrao_portal', 'option' );
                            $post_link = $link_pattern . get_field( 'link_caminho', 'option' ) . get_field( 'link_noticia', 'option' );
                            $request_posts = wp_remote_get( $post_link );;
                        
                        if(!is_wp_error( $request_posts )) :
                            $body = wp_remote_retrieve_body( $request_posts );
                            $data = json_decode( $body );

                            if(!is_wp_error( $data )) :
                                foreach( $data as $rest_post ) :
                                    $count++;
                                    $id = array( $rest_post->id );
                    ?>
                            <div class="swiper-slide justify-content-start">

                                <a 
                                class="card text-decoration-none"
                                href="<?php echo get_home_url( null, 'noticia/?id=' . $rest_post->id )  ?>">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo $rest_post->featured_image_src; ?>"
                                        alt="<?php echo $rest_post->title->rendered; ?>">
                                    </div>
 
                                    <div 
                                    class="card-body"
                                    style="background-color:#871619">
                                        <h3 class="u-font-size-22 u-font-weight-bold u-font-family-nunito text-white">
                                            <?php echo $rest_post->title->rendered; ?>
                                        </h3>

                                        <span 
                                        class="u-line-height-100 position-absolute u-font-size-52 u-font-weight-extrabold u-font-family-nunito u-color-folk-light-yellow"
                                        style="bottom:1rem;right:1rem">+</span>
                                    </div>
                                </a>
                            </div>
                            <?php 
                                endforeach;
                            endif;
                        endif;
                    ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
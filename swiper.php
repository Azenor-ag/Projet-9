<div class="swiper mySwiper">
    <div class="swiper-wrapper">
    <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<div class="swiper-slide">';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<p>'. $main_character->post_title . '</p>';
                    echo '</div>';
                    $characters_query->next_post();
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<div class="swiper-slide">';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<p>';
                        the_title();
                        echo'</p>';
                        echo '</div>';
                    }
                    ?>
    </div>
</div>

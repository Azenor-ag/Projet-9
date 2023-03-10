<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img  src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <video id="parallax" autoplay  muted loop poster="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <source src="http://localhost/Projet%209/wp-content/uploads/2023/02/video_studio_koukaki.mp4" type="video/mp4">
            </video>
        </section>
        <section id="#story" class="story">
            <h2 class="reveal ">L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
             <article id="characters">
                <div class="main-character">
                    <h3 class="reveal " >Les personnages</h3>  
                    <?php get_template_part( 'swiper', get_post_format() ); ?>
            </div>
            </article>
            <article id="place">
                    <img class="little_cloud clouds" src="<?php echo get_stylesheet_directory_uri() .'/assets/little_cloud.png'?>" alt="little cloud">
                    <img class="big_cloud clouds" src="<?php echo get_stylesheet_directory_uri() .'/assets/big_cloud.png'?>" alt="big cloud">
                <div>
                    <h3 class="reveal ">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>
        <section id="studio">
            <h2 class="reveal ">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l???animation, Koukaki est un studio int??gr?? fond?? en 2012 qui cr????, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activit?? : le long m??trage et le court m??trage. Nous d??veloppons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une cr??ativit?? et une capacit?? d???innovation mondialement reconnues, une expertise ??ditoriale et commerciale ?? la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un march?? en forte croissance. Koukaki construit chaque ann??e de v??ritables succ??s et capitalise sur de puissantes marques historiques. Cette ann??e, il vous pr??sente ???Fleurs d???oranger et chats errants???.</p>
            </div>
            </section>
            <?php 
	        get_template_part( 'nominations', get_post_format() ); ?>
    </main><!-- #main -->
<?php
get_footer();

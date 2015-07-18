<!doctype html>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/_assets/main.css" charset="utf-8">
        <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div <?php body_class( 'header' ); ?>>
            <div class="header-nav">
</div>
            <div class="header-inner">
                <div class="intro-container">
                    <!-- <div class="title">THIS IS A WP THEME</div> -->
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_assets/img/logo.png" alt="" class="logo">
                    <div class="subtitle">
                        <?php _e( 'Your business', 'SJ_Web' ); ?>                         
                        <span class="italic"><?php _e( 'needs', 'SJ_Web' ); ?></span> 
                        <?php _e( 'a website', 'SJ_Web' ); ?>
                    </div>
                    <div class="button-container">
                        <div class="button">
                            <?php _e( 'GET IN TOUCH', 'SJ_Web' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-inner">
                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam odit, fugit adipisci, dolore vitae consectetur officiis distinctio quidem tempore, ab sed sint recusandae quae. Provident nulla earum nemo inventore, nisi!', 'SJ_Web' ); ?></p>
            </div>
        </div>
        <div class="portfolio-one">
            <div class="portfolio-inner">
                <div class="screenshot-left">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_assets/img/safeguard.png" alt="" class="safeguard">
                </div>
                <div class="text-right">
                    <h4><?php _e( 'Safeguard Security NE', 'SJ_Web' ); ?></h4>
                    <p class="italic"><?php _e( 'small enough to know you and big enough to meet your needs', 'SJ_Web' ); ?></p>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ducimus cum nihil, dicta odio numquam reprehenderit voluptas, accusantium commodi excepturi inventore error atque maxime! Rem temporibus dolorum rerum nam, alias.', 'SJ_Web' ); ?></p>
                    <div class="portfolio-button-container">
                        <div class="button portfolio-button">
                            <?php _e( 'View Project', 'SJ_Web' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="portfolio-two"> -->
            <div class="portfolio-inner">
                <div class="screenshot-left">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/_assets/img/drum-train.png" alt="" class="drum-train">
                </div>
                <div class="text-container">
                    <div class="text-right">
                        <h4><?php _e( 'Drum Train', 'SJ_Web' ); ?></h4>
                        <p class="italic"><?php _e( 'small enough to know you and big enough to meet your needs', 'SJ_Web' ); ?></p>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, ducimus cum nihil, dicta odio numquam reprehenderit voluptas, accusantium commodi excepturi inventore error atque maxime! Rem temporibus dolorum rerum nam, alias.', 'SJ_Web' ); ?></p>
                        <div class="portfolio-button-container">
                            <div class="button portfolio-button">
                                <?php _e( 'View Project', 'SJ_Web' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="contact-inner">
                    <h4><?php _e( 'Like what you see? Tell us about your company', 'SJ_Web' ); ?></h4>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p><?php _e( 'Copyright SJWEB - Website by SJWEB', 'SJ_Web' ); ?></p>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/_assets/main.js" charset="utf-8"></script>
</html>

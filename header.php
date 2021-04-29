<?php
/**
 * The header for our theme
 * 
 * @package mexe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
    <style type="text/css">
        @font-face {
            font-family: 'Favorit';
            src: url('https://dev.pedrocandeias.net/mexe/assets/fonts/favorit-regular.woff') format('woff'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/favorit-regular.otf') format('opentype');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/favorit-regular.woff') format('woff'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/favorit-regular.otf') format('opentype');
        }
        
        @font-face {
            font-family: 'happy-times-ng_regular_master_web';
            src: url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_regular_master_web.woff2') format('woff2'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_regular_master_web.woff') format('woff'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_regular_master_web.ttf') format('truetype'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_regular_master_web.otf') format('opentype');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_regular_master_web.woff2') format('woff2'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_regular_master_web.woff') format('woff'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_regular_master_web.ttf') format('truetype'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fonts/happy-times-NG_regular_master_web.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
        
        @font-face {
            font-family: 'happy-times-ng_regular_master_web';
            src: url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_bold_master_web.woff2') format('woff2'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_bold_master_web.woff') format('woff'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_bold_master_web.ttf') format('truetype'), url('https://dev.pedrocandeias.net/mexe/assets/fonts/happy-times-NG_bold_master_web.otf') format('opentype');
            src: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_bold_master_web.woff2') format('woff2'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_bold_master_web.woff') format('woff'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/happy-times-NG_bold_master_web.ttf') format('truetype'), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/fonts/happy-times-NG_bold_master_web.otf') format('opentype');
            font-weight: bold;
            font-style: normal;
        }
    </style>
	<link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="f-header  position-sticky top-0 bg-white js-f-header border-bottom">
        <div class="f-header__mobile-content container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-header__logo" rel="home">
                <?php bloginfo( 'name' ); ?>
            </a>

            <button class="reset anim-menu-btn js-anim-menu-btn f-header__nav-control js-tab-focus" aria-label="Toggle menu">
                <i class="anim-menu-btn__icon anim-menu-btn__icon--close" aria-hidden="true"></i>
            </button>
        </div>

        <div class="f-header__nav" role="navigation">
            <div class="f-header__nav-grid justify-between@md container">
                <div class="f-header__nav-logo-wrapper flex-grow flex-basis-0">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-header__logo" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>


                <?php
                    echo wp_nav_menu(
                        array(
                            'menu'            => 'menu-main',
                            'menu_class'      => 'margin-bottom-md margin-bottom-0@sm col-12@sm text-center',
                            'container'       => 'nav',
                            'container_class' => 'flex flex-column gap-sm margin-top-auto@sm items-center',
                            'container_id'    => '',
                            'container_aria_label' => 'Main',
                            'echo'            => false,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'walker'          => '', 
                            'theme_location'  => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'item_spacing'    => '',
                            'depth'           => 1,
                            )
                    ); 
                ?>

                <ul class="f-header__list flex-grow flex-basis-0 justify-center@md text-uppercase font-bold letter-spacing-md">
                    <li class="f-header__item"><a href="programacao.html" class="f-header__link">Programação</a></li>
                    <li class="f-header__item"><a href="artistas.html" class="f-header__link">Artistas</a></li>

                    <li class="f-header__item">
                        <a href="oencontro.html" class="f-header__link js-tab-focus">
                            <span>O Encontro</span>
                        </a>
                    </li>
                    <li class="f-header__item">
                        <a href="#0" class="f-header__link">
                            <svg class="x-n_x icon--sm" viewBox="0 0 24 24">
                              <path d="M17,11H13V7a1,1,0,0,0-2,0v4H7a1,1,0,0,0,0,2h4v4a1,1,0,0,0,2,0V13h4a1,1,0,0,0,0-2Z"></path>
                            </svg>
                        </a>

                        <ul class="f-header__dropdown">
                            <li><a href="#0" class="f-header__dropdown-link">EIRPAC</a></li>
                            <li><a href="#0" class="f-header__dropdown-link">Notícias</a></li>
                            <li><a href="#0" class="f-header__dropdown-link">Contactos</a></li>
                            <li><a href="#0" class="f-header__dropdown-link">Outros</a></li>
                            <li><a href="#0" class="f-header__dropdown-link">Outros</a></li>
                        </ul>
                    </li>
                </ul>




                <ul class="f-header__list flex-grow flex-basis-0 justify-end@md">

                    <li class="f-header__item">
                        <a href="#" class="f-header__link border border-2 border-opacity-90% border-black radius-full">EN</a>
                    </li>

                </ul>

            </div>
        </div>
    </header>

<div id="page" class="site">
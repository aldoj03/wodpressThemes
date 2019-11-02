<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">

    <?php  wp_head() ?>
</head>
<body  <?php body_class() ?>>
    <header <?php if(is_single() || is_page()): ?> style="height: 9rem" <?php endif;?> >
        <div id="header-opacity">
            <nav id="header-menu">
                <?php if ( has_nav_menu( 'header-menu' ) ): ?>
					<?php 
					wp_nav_menu(
						[
							'theme_location' => 'header-menu',
							'menu_id'        => 'header-menu',
						]
					);
                    ?>
                    <?php endif;?>
            </nav> 
            <?php if(is_home() || is_archive() ): ?>
            <div id="description">
         <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name') ?></a></h1>
                <div>
                    <p><?php bloginfo('description') ?></p>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </header>

    <section id="main-menu" >
    <?php if ( has_nav_menu( 'main-menu' ) ): ?>
					<?php 
					wp_nav_menu(
						[
							'theme_location' => 'main-menu',
							'menu_id'        => 'main-menu',
						]
					);
                    ?>
                    <?php endif;?>
    </section>


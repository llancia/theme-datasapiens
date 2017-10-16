<?
/* Header file
*/
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <!-- CSS  -->
        <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="navbar-fixed hide-on-med-and-down">
        <nav class="grey darken-2" role="navigation">
            <div class="nav-wrapper container contlargo">
            <a  class ="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>    

                <ul class="right hide-on-med-and-down">
                    
<?php wp_nav_menu(array('theme_location' => 'top_bar', 'container_class' => 'menu-nav')); ?>
                    
                </ul>
            </div>
        </nav>
            </div>
        <div class="hide-on-large-only">
        <nav class="grey darken-2" role="navigation">
            <div class="nav-wrapper container contlargo" >
            <a  class ="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>    
                <a href="#" data-activates="mobile-demo" class="button-collapse bottonemenu"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                     
<?php wp_nav_menu(array('theme_location' => 'top_bar', 'container_class' => 'side-menu')); ?>                    
                </ul>
                <ul class="side-nav" id="mobile-demo">
                     
<?php wp_nav_menu(array('theme_location' => 'top_bar', 'container_class' => 'side-menu')); ?>                     
                </ul>
            </div>
        </nav>
            </div>
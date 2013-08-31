<?php
    global $page, $paged;
    $Smarty = smarty_get_instance();
    $Smarty->assign( 'username', 'SpeeD_GaLOSh' );
    ;
    
    $Smarty->assign( 'blog_name',           get_bloginfo( 'name' ) );
    $Smarty->assign( 'blog_description',    get_bloginfo( 'description' ) );
    $Smarty->assign( 'blog_pingback_url',   get_bloginfo( 'pingback_url' ) );
    $Smarty->assign( 'page_title',          'Главная страница' );
    
    $Smarty->assign( 'home_url',            home_url( '/' ) );
    $Smarty->assign( 'theme_url',           get_template_directory_uri() );
    $Smarty->assign( 'registration_url',    wp_registration_url() );
    $Smarty->assign( 'login_url',           wp_login_url() );
    $Smarty->assign( 'logout_url',          wp_logout_url() );
    
    $Smarty->assignByRef( 'page', &$page );
    
    $Smarty->display( 'home.tpl' );
?>


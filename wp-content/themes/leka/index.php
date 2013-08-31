<?php
    global $posts, $post;
    
    $smarty = smarty_get_instance();
    
    // Собираем информацию о текущем пользователе
    $user = array();
    if ( get_current_user_id() ) {
        $wp_user = wp_get_current_user();
        $user['id'] = $wp_user->ID;
        $user['username'] = $wp_user->user_login;
        $user['registered'] = $wp_user->user_registered;
        $user['email'] = $wp_user->user_email;
        $user['status'] = $wp_user->user_status;
        $user['is_guest'] = false;
    }
    else {
        $user['id'] = 0;
        $user['username'] = 'Гость';
        $user['is_guest'] = true;
    }
    $smarty->assignByRef( 'user', $user );
    
    
    $smarty->assign( 'site_name',           get_bloginfo( 'name' ) );
    $smarty->assign( 'blog_description',    get_bloginfo( 'description' ) );
    $smarty->assign( 'blog_pingback_url',   get_bloginfo( 'pingback_url' ) );
    $smarty->assign( 'page_title',          'Главная страница' );
    
    $smarty->assign( 'home_url',            home_url( '/' ) );
    $smarty->assign( 'theme_url',           get_template_directory_uri() );
    $smarty->assign( 'registration_url',    wp_registration_url() );
    $smarty->assign( 'login_url',           wp_login_url() );
    $smarty->assign( 'logout_url',          wp_logout_url() );
    
    // Статичная страница
    if ( is_page() ) {
        $title = get_the_title();
        $smarty->assign( 'page_title', $title );
        
        $content = $post->post_content;
        $content = apply_filters( 'the_content', $content );
        $content = str_replace( ']]>', ']]&gt;', $content );
        $smarty->assignByRef( 'content', $content );
        
        $smarty->display( 'page.tpl' );
    }
    
    // Пост (новость)
    else if ( is_single() ) {
        $postdata = array();
        $postdata['id'] = $post->ID;
        $postdata['title'] = get_the_title();
        
        $content = $post->post_content;
        $content = apply_filters( 'the_content', $content );
        $content = str_replace( ']]>', ']]&gt;', $content );
        $postdata['content'] = $content;
        
        $smarty->assignByRef( 'post', $postdata );
        $smarty->display( 'post.tpl' );
    }
    
    else if ( is_singular() ) {
        echo 'SINGULAR!';
    }
    
    // Главная страница
    else if ( is_home() ) {
        // TODO: Добавить список постов $posts
        $smarty->assign( 'page_title', 'Главная страница' );
        $smarty->display( 'home.tpl' );
    }
    
    // Список статей
    else if ( is_paged() ) {
        echo 'What is it?';
    }
    
    else {
        echo '???';
    }
?>
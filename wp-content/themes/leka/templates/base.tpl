{*
    Шаблон:     base.tpl
    Описание:   Базовый шаблон сайта
    Автор:      SPeeD_GaLOSh             (c) 2013
    
    Переменные: 
        $home_url
            Ссылка на главную страницу
            
        $theme_url 
            URL каталога, где расположена тема
            
        $user 
            текущий пользователь. Содержит поля:
                is_guest - true, если это гость
                id - идентификатор
                username - имя пользователя

        $site_name 
            название сайта

    Блоки:
        page_title - заголовок страницы
        head - дополнительные тэги в блоке <head></head>
        navbar - навигационое меню, по умолчанию - шаблон navbar.tpl
        content - отображаемое содержимое
        footer - подвал, по умолчанию - шаблон footer.tpl
    
    TODO:
        Добавить подключение необходимых js-скриптов
        Добавить ссылку на favicon.ico
*}
{config_load file='base.conf'}
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<title>{$site_name} | {block 'page_title'}{$page_title}{/block}</title>
	<script src="{$theme_url}/js/html5.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" media="all" href="{$theme_url}/style.css" />
{block 'head'}{/block}
</head>
<body>
{block 'navbar'}{include 'navbar.tpl'}{/block}
{block 'content'}{/block}
{block 'footer'}{include 'footer.tpl'}{/block}
</body>
</html>

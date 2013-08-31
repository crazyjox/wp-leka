{*
    Шаблон:     home.tpl
    Описание:   Шаблон главной страницы сайта
    Автор:      SPeeD_GaLOSh             (c) 2013
    
    Наследует переменные: 
		view.tpl
        
    Собственные переменные: 
        $posts 
            массив постов. Каждый пост содержит поля:
                id - идентификатор
                title - заголовок

    Блоки:
        content - отображаемое содержимое
    
    TODO:
*}
{extends 'view.tpl'}

{block 'content'}
{foreach $posts as $post}
{* 
    Вывод списка последних постов
*}
{/foreach}
{/block}
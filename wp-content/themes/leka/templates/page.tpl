{*
    Шаблон:     page.tpl
    Описание:   Шаблон статичной страницы сайта
    Автор:      SPeeD_GaLOSh             (c) 2013
    
    Наследует переменные: 
        view.tpl
        
    Собственные переменные: 
        $content - true, если это статическая страница 

    Блоки:
        content - отображаемое содержимое
    
    TODO:
*}
{extends 'view.tpl'}
{block 'page_title'}{$page_title}{/block}
{block 'content'}
<article>
    <header class="entry-header">
        <h2 class="entry-title">{$page_title}</h2>
    </header>
    <div class="entry-content">
        {$content}
    </div>
</article>
{/block}
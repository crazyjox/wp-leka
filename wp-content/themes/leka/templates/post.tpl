{*
    Шаблон:     post.tpl
    Описание:   Шаблон поста сайта
    Автор:      SPeeD_GaLOSh             (c) 2013
    
    Наследует переменные: 
        view.tpl
        
    Собственные переменные: 
        $post
            отображаемый пост. Содержит поля:
                id - идентификатор
                title - заголовок
                posted - дата публикации
                content - содержание поста
                author - автор поста
                published - true, если пост опубликован
                comments_enabled - true, если комментарии разрешены
                comments_count - число комментариев
                comments - список комментариев
            
    Блоки:
    
    TODO:
        Добавить ссылки редактирования, скрытия и удаления поста
*}
{extends 'view.tpl'}

{block 'page_title'}{$post.title}{/block}
{block 'content'}
<article id="post-{$post.id}">
    <header class="entry-header">
        <h2 class="entry-title">{$post.title}</h2>
    </header>
    <div class="entry-content">
        {$post.content}
    </div>
</article>
{/block}

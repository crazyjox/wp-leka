{*
    Шаблон:     yandex.tpl
    Описание:   Шаблон формы автооплаты Yandex.Деньги
    Автор:      SPeeD_GaLOSh             (c) 2013
    
    Наследует переменные: 
        page.tpl
        
    Собственные переменные: 

    Блоки:
    
    TODO:
        Номер кошелька - должен передаваться в шаблон как переменная!
*}
{if $user.is_guest }
Для пользования сервисом вам необходимо войти под своей учетной записью или зарегистрироваться!
{else}
{config_load file='yandex.conf'}
{block 'head'}
<link rel="stylesheet" type="text/css" media="all" href="https://money.yandex.ru/css/ui/widgets/b-widget-commercial.css?ver=1" />
{/block}
Укажите сумму, которую необходимо перевести.
После нажатия на кнопку "Перевести" вы будете перенаправлены на официальную страницу Yandex.Деньги, в которой необходимо подтвердить перевод
<div class="b-widget-commercial">
  <form method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml">
    <input name="receiver" type="hidden" value="{#uid#}"/>
    <input name="label" value="" type="hidden"/>
    <input name="FormComment" type="hidden" value="не указано"/>
    <input name="short-dest" type="hidden" value="не указано"/>
    <input name="writable-targets" type="hidden" value="false"/>
    <input name="writable-sum" type="hidden" value="true"/>
    <input name="comment-needed" type="hidden" value="false"/>
    <input name="quickpay-form" type="hidden" value="shop"/>
    <table class="b-form__grid">
      <tr>
        <td class="b-form__label">
          <label>Назначение платежа:</label>
        </td>
        <td class="b-form__field">
          <div class="b-form__label">Пополнение счета</div>
          <input type="hidden" name="targets" value="{$user.username}"/>
        </td>
      </tr>
      <tr>
      <td class="b-form__label">
        <label>Сумма:</label>
      </td>
      <td class="b-form__field">
        <div style="width: 60px;" class="b-input-text b-input-text_inline">
          <input class="b-input-text__input" style="text-align: right;" data-type="number" type="text" maxlength="10" name="sum" id="sum" value=""/>
        </div>
        <span class="b-form__input-postfix">руб.</span>
      </td>
      </tr>
      <tr class="b-form__buttons">
        <td style="text-align: right;">
          <a class="b-widget-commercial__logo-link" target="_blank" href="https://money.yandex.ru/">
            <img class="b-widget-commercial__logo-img" src="https://money.yandex.ru/img/ym_logo.gif" height="32px" alt="Yandex.Money"/>
          </a>
        </td>
        <td>
          <span class="b-button b-button_1 b-button_orange" data-block="b-button">
            <span class="b-button__inner">Перевести</span>
            <input type="submit" value="Перевести" class="b-button__input" name="submit-button"/>
          </span>
        </td>
      </tr>
    </table>
  </form>
</div>
{/if}
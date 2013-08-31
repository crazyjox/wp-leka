<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp_leka');

/** Имя пользователя MySQL */
define('DB_USER', 'wp_leka');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '54321_test');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ORl9`n#b!YU7 SE}[Ag^te=Tw /Cz%k@`!JS9Nu`0$+}H/%%z$|K%({4?f:TZo2W');
define('SECURE_AUTH_KEY',  ' 05sTPwc=HtR+Dm4MEk=L9(33o_qO34&Gyy8L4CEQIVflH;J:3`Pj|k|!c,?MTXi');
define('LOGGED_IN_KEY',    'vBFQ^gVB3{san?5w,Jiy|2*54|2:#8Kb!e*mthST m()|WZZy!~*/AU2)l~+B1L1');
define('NONCE_KEY',        '3dCeOiA)EmIf^v jD#HJk4#P<16|toAARnm,bP2Z~=_!,{uX `)<8q, O^&Z2u2|');
define('AUTH_SALT',        ',t=Rm%%vSQ7NK!#y_`.XK DY]JOYA|F(&](_H%qBCxau_P`>hf?P{L!`Sxy[/m!E');
define('SECURE_AUTH_SALT', 'PfCTz0!$[LER?AO&Xh(b|;A;O,tEq.#2<68g:kKt&l32McqQdY5P4u zO owumX-');
define('LOGGED_IN_SALT',   'WdJt!|8>x^;A%8wl_8c9Nl`w@M#[ XiU0zlmMX3zw5R:TyLV79io{p?;Xa&9I^Q7');
define('NONCE_SALT',       'TemokN%E3zP:ZIMf7CvGl>P4[L:SPNVSdc#,rIq-Q(T+hlX-reH3@Xd$+]w|n$-*');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

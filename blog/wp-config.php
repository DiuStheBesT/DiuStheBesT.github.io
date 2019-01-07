<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u838796963_1');

/** Имя пользователя MySQL */
define('DB_USER', 'u838796963_1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'NjJf9u7jW9Gz');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7/tRjH|rE]7Y k@#PbB+R^Bb7PIY]Us}>sh+*~A579P$n,L:#4v}l6 sfi0{{Q+%');
define('SECURE_AUTH_KEY',  'tL4d7/BAus_}ieM#Nld0-|r-B 1{&N?S2(LKBG)xZ~O0tW!AAm6tE8|%@XXAb`]e');
define('LOGGED_IN_KEY',    'stnyK*l|CK<FqKTZdLl-Uuw<&2!(EswrH4GR`m}}v4/2Jzr=FYUu.:S7}/cHev<e');
define('NONCE_KEY',        'n3XhEG7>^*P+m=@24zB3R7b3)EA#BkL!@%EB6MotTl>h_3rU1K,=*u~u%Pglh0^R');
define('AUTH_SALT',        '81JgX{ mA/;+qBm@}7R[Y#$reW:Vxt1I>+XuS.3D6.u}2eXC)BV`0NC3*U8H;TOX');
define('SECURE_AUTH_SALT', 'X~-$pf:s~w{OL#PI(RiPw&7Q,fmmU5!E3L#f.]H^tEg=mns(ZU3L:X. a15*P40q');
define('LOGGED_IN_SALT',   'Oz(}n{g_I(yi&N$nW<23*X2y<|3+1[6<7CDG!]4/fSap}9ro;dor(nFEEV46u:l+');
define('NONCE_SALT',       'cQWp8FSvh~TlqN~G3i]S`1jLNik;f-Sn[48X-;LD:Wtv>q&-dYc=+7bD`XC UMY~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

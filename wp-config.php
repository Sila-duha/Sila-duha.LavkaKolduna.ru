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
define('DB_NAME', 'Sila-duha.lavkakolduna.ru');

/** Имя пользователя MySQL */
define('DB_USER', 'Sila-duha');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password_here');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '$|0054I`RI(KX`w%#>}^T<ENT2>5:-Rl]UK-JB=X>9-{5~ cb`!((_B{q&Rg[4j5');
 define('SECURE_AUTH_KEY',  '/SFevRj?^xo.V~|-ZZWU4Bd;f(QniMAyo20$`WFhD(lf9YYLr|R<VK#R+ISo^;[:');
 define('LOGGED_IN_KEY',    'ubi2BVlvWg]&-E,U+T,zj>*L+&^Bx,S]@c`zUq>[5dj(fQKb&KmF-f<3VV-GA,J<');
 define('NONCE_KEY',        'L6}F=Njy~^!{*|tZ;GM4_e%lxAyE5+E>ZWmC!FH4%+P!L5-]@+@G!nfS[8QFCC[x');
 define('AUTH_SALT',        'Fwy!z<|U#^WM 9^1]4+4`}_i{|3f-]N-h53s_+<|L1W-kw3TeeF7*y}^-D:##W{t');
 define('SECURE_AUTH_SALT', 'd3t1@lzK.+!b4qWua+t)=e}c0SI/}c})L=JSF5}~yae.bT|2uA/vS-n-rNP~pKV|');
 define('LOGGED_IN_SALT',   'gNc6EH&9]<|kFf:]p~bKf6C+gSp+lHqT)ozK&2%~oC|SL!Mnl^)|;3XVImXuI!tE');
 define('NONCE_SALT',       ';k>Q(hB+K=Gh57El[&G]5j.MIIXbUAyPFW,T/!|Z=O9.BkK]1_FOXOs^.O%1}J1P');
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

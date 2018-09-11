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
 define('AUTH_KEY',         'J:|2e:}31jm|ZES~7<Dfu@yq7UK^5q4D5xLV<V7z^>&[0^&<dkb((X9ku_^j%t[m');
 define('SECURE_AUTH_KEY',  'cHMd,P,&F)Z?|-EwJaOqSvuP[SS?GV72s l,a&vl@l>; jFj)Iw!-uH^jE66C.wn');
 define('LOGGED_IN_KEY',    'X/V#|T96qb:My-dWME6AitnjKm[1/jcIhSN;CY>#%#F)5K/]^~qEKL*mz|Y7^gMf');
 define('NONCE_KEY',        'gURn-npv/&qCy-hOPeDmR]/WU-F42)`!<z}MfUC@b]b*|a<MJ $;CQ2w.r@y*7G}');
 define('AUTH_SALT',        '&^msKv]BdZ/_z@e+9V|@u^#|),Z#Tj8(P$9[7[p.l];l-i1.gm4)y3AeS)r5W+9w');
 define('SECURE_AUTH_SALT', 'I-DkI7~i|UN:lX,8Qjctgd>x!LwmUI&+ xZ-n?:ffz*9EmuzSBEn~6`8Vz7n}kgj');
 define('LOGGED_IN_SALT',   'P^;`;>aybAORY9m9Fpv#AQfRC2kwh*OpG-{6x[IzC4H%z(w9f{zY28s#`&ZGa)QQ');
 define('NONCE_SALT',       'x+Tg,WBX-|VcnM=Y-e$qE;^ipEw=Z7Xw>w6qO[#OVF@XV}p)p4~FWPjS5!Hf2m%,');
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

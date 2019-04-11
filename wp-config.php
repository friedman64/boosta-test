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
define( 'DB_NAME', 'tajam' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x`LZ[o S4FqsLb/PY{f*_yp&=;pF/;oX=].;bw,s=AgRDcuL]6uFp%Gyen><_0p<' );
define( 'SECURE_AUTH_KEY',  '+,#JZgynSKF68z{UKFWz*/~W$UmgD!8./BcY{MVnr?B|:>(!aa5C?MIpbqWo`oLb' );
define( 'LOGGED_IN_KEY',    'Oa.^q$W#Ojfu9VU|Qz`[,/6ohromDRp~*![4}3H}6Ve4SEci hO%_yidO,%j(@oX' );
define( 'NONCE_KEY',        'wOZ&K<29Sv 9m2KcJ9r`,gdR kDmEf{-6;,!V;t8(Kd9F7mL7cp/FR4huU1-9+X8' );
define( 'AUTH_SALT',        '|b%8iR L-UFW^I7,f>${.9bw/DJO<oAY9q+yoI^x;-14*%*sPfWg-_XEy<gmZSx%' );
define( 'SECURE_AUTH_SALT', '}O&Y:T>hkVWu| JL?O0:<2u]` 4`KW$dP08R_vx%GFkk[`Zz{Tj{~*2S8sKwrxSB' );
define( 'LOGGED_IN_SALT',   'cL3FDJ[^`jcV@1@,EAN<x;G:hP$58xdo,mQL(&etV?((`2fj`uzU%~%0],oDcace' );
define( 'NONCE_SALT',       '{)+ucx8I&fT.?^<Puy?](YG$g*H!y*#}A Z4tLnp}dddT3Ofzb9ZzKuyxB>Z]2}9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

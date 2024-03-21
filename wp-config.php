<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "avtosc03_blckmmb" );


/** Имя пользователя базы данных */
define( 'DB_USER', "avtosc03_blckmmb" );


/** Пароль к базе данных */
define( 'DB_PASSWORD', "*bU9^7bu3H" );


/** Имя сервера базы данных */
define( 'DB_HOST', "avtosc03.mysql.ukraine.com.ua" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/MIY?KV}r2o5#PIb#xV@)Vk*+Tdo@(7Fj=L2/D3(iPJ@|{<SR[6, >r64(!SHL,E' );

define( 'SECURE_AUTH_KEY',  '<%.ZlEZ Vn:*=Xfs<%N6dwMkq[T+,JBj~keaw`kvx/J7go%!l,BsRDj[%{ia&MTb' );

define( 'LOGGED_IN_KEY',    'Av;8XE.NSXf+iYaX+*YRm0: 8SfqC:sI]Hj/k0JDlILF_Tj$2jzimbD6?rZ}srb9' );

define( 'NONCE_KEY',        'NXZ:R`AzbW0bt9SWwP%8:uCJ7^$&vpZH0$%+1D7NksPA9`ElK7os3EInf J&JBi;' );

define( 'AUTH_SALT',        'i 6b0%@RnIMkp)Ct(pLFyu@KDsCR**v|C0&5[1_uo]JFKypBF1osn*Ucw dJ[dp.' );

define( 'SECURE_AUTH_SALT', '}XVxC-*gDw6=lkCK0xO1B|Q7{*<Ks5caf$ecj;=>tC=<^!$o$BvnW#+4/[c[yA>K' );

define( 'LOGGED_IN_SALT',   'uCOzt:nqg3Iw$0g(F/n%PN93._e.nyr:,K]xa*TLBuZtdOM,|$FDuS0eu5Q|;FCn' );

define( 'NONCE_SALT',       'Vv90o6gGdbPv<8pwyhI$Ri1<Q?Iot?R46 <@EL@U#N,4=sR63*LWnF)]=m!;-,Jj' );


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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

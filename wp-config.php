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
define( 'DB_NAME', 'khochutort74' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'D}F2~i$$LGFaw_V{fd}?b{B)o3q7ukG%Feh!jpo8fd}A.n|]ZzkRq8h~{{RM2(c ' );
define( 'SECURE_AUTH_KEY',  '>vI54>3_E(v*`!@n$afMF++/T-{6[F;kK_@w!6r-RD*UsTRU#}KVo=~ ._MJ}hv>' );
define( 'LOGGED_IN_KEY',    'cehm<~%bU]a!Gp<K4w%=CCe/Hu`X+cgu(VIwKZp$(!~5cY.0X5}3@s5]GVqM_:P$' );
define( 'NONCE_KEY',        '_,xH%@xWm$Q}Em:;>(OYpx3bt~Qtkc{X;M:?4g1YB6&NYYopm!N^,;/z<aKR.1?*' );
define( 'AUTH_SALT',        '^Ile|[4r+$ygxxJZy{T4RhXwUcAurCy%(+<w7BHpFI53Ofk63TQ@WzTt/p+j)E4=' );
define( 'SECURE_AUTH_SALT', '95Qoq ~79|yTzFumA%)Ao3uiLp<ngX]{4Iz_055A;aM4Pet13W`6^qhlO~X;Uvi[' );
define( 'LOGGED_IN_SALT',   '/1f8EX8DN.eUa/6.ppB*#Tzs!xHms2VST2ry+Z:[m17mf}}d2yUV6%,|j+>qH#lW' );
define( 'NONCE_SALT',       'DDW:qH$=N`<%47NW|F`c]g/*XchX8/_=Y@`;#R;vO q6fHKG0FFXK&kq4`-];-LN' );

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

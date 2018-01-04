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
define('DB_NAME', 'web_dev');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' Vg?(zvV<(=c~}$*{a/Jdh^3Ff,/#a{pmk+p8`D<aJL %#9^y`ng|jctni[of;hX');
define('SECURE_AUTH_KEY',  'sC1`bqMV*gG;#*OR(#*Nl!S/RR/>?{ZK][q4DC15|)V>KKgW+oN=gG$D@n]J%AI,');
define('LOGGED_IN_KEY',    'YFNg6Lp4ED:G<OC7lNYlj@cAke8Vc_r*WPk3:G>}As<4L<>x Xx([~h(iEVT4U(}');
define('NONCE_KEY',        'M`v]JqEtg=60KSVhg+QH<(TRDM,?jU8Z`pE:np<vaO+#hBvtMSIe6CUtz38_hr$h');
define('AUTH_SALT',        '&}A%iVEG^vX;6JQxI9S/]l!],C-C}sYHgrA2fXNu_o.&<W~}n#m`-XI!;W<Nj8NY');
define('SECURE_AUTH_SALT', '*dM~#]|^u})xO:;;F8c]%Q.@{^kRr& uft9?~N?5UYyLuRqLo8{/~~ {X%$w*FLM');
define('LOGGED_IN_SALT',   'zFx}kTZfi[c{|b^ebA$QeT[&!B*BV9.5kE5TVc,Ok:e1_s{SKHmU{q^G9=KTE!}:');
define('NONCE_SALT',       'wA;|ME^/zBQp5%~4;.Xta&QylDS/* tQzkCA``h7H;rP>zh?v9.DjSlZ&0+]`(!l');

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

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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'k-?.6Df3~QeN`H*O]eT~:PX/o}G:_MT{#yC|)gMj%)d4:?~cgZYt(*&^8NM_7@Zl');
define('SECURE_AUTH_KEY',  '@!2}F=M[*-;6c?MO>p=LFw/e I_[4e<fb_i(gVViSA}`xfMBO3w.2mbqdJk0$m_.');
define('LOGGED_IN_KEY',    '#g%zxB/;{_*;DJ}ye|7h#%3OpXPfD>.W;)DWWP= *,|`zN^0:-T~.5(O;<,]yJ[?');
define('NONCE_KEY',        'zd=hy m[&T4mf+AC;c05fSR66V0+Yg>f8qy}t6QHjWDiJYU!@/(_e6Y=2^9i>wkM');
define('AUTH_SALT',        'MvRz#mE$dU5#~:s+A4NNC=Az-P]H_Im/+o#].wosj,$XKH2TQY}_?/L]5eUK!JZN');
define('SECURE_AUTH_SALT', 'jf{xp !t~ae+YyRU*8$Oz`l|2VQmC$c;#J=z}UC38|*z),QfQuAF^gTLzoHaLxX1');
define('LOGGED_IN_SALT',   '4)atAD_<#tU6hwgt22_*XBOy#MLX1#(CQP1VPh,&C4xIyAAvZb*H5i+dc+R.}Ywg');
define('NONCE_SALT',       'Vyw{z}`UjpA=^U-/71=D.EMC)Jd+d/m~T}yp[!lSui.6s3&D+9<M{Zzb_,WztJOB');

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

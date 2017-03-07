<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/pzr/workspace/wp/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wp_blog');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tFS3~Q_Ho}#]cfFsY|dK^Q&Wd]cU}k8Zzuj,11zBk [<b]7& qn3@Ee<hF|7C&+<');
define('SECURE_AUTH_KEY',  'M~;zku:=z_ /<S~<JW8vP{U8E.4%OMl&n)yqW<7TjEt3at(%.Ex;Q5{W8rv@={f)');
define('LOGGED_IN_KEY',    '}Uu?0|#ct{0w%)[4Y:RZB`*x+`f&XWf[0A3GExPjH-C~kRE`KvJv#;|ENxwM4){?');
define('NONCE_KEY',        ']*Dct2^;o,bVu6fiFC!0OgoY-zmfR>{)L?5c{>tBamK:NI[ ]t9+:~WLxY3>e<Hu');
define('AUTH_SALT',        'b/rRIzgMdE# -Th<1s^H&U5f-M_?#}R5I-K`ju>G5}:y;m8{@yv=}krhm1cLREq}');
define('SECURE_AUTH_SALT', '9]2PzV}SG -P|^TKFh}MwwX927`~Xd+8F{b2]TmndRJ9f-VG,=O{op!NGm5AU9}u');
define('LOGGED_IN_SALT',   '`pEMoEopq~)Z-::f(<:@KIDmf?1=?K/#$T^=B<}DRiz66O/N8f#Uth,8kh`~6;xZ');
define('NONCE_SALT',       '$|&$w/K5YH*y%~^ti+[m*{kGv(E>BlX[a$>y^U3s:M#$dYUf&tEO-|c)*jd:pLr9');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

// 每分钟保存一次
define('AUTOSAVE_INTERVAL', 60);
 
//保存 10 个版本
define('WP_POST_REVISIONS', 10);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
if(is_admin()) {add_filter('filesystem_method', create_function('$a', 'return "direct";' ));define( 'FS_CHMOD_DIR', 0751 );}


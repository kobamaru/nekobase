<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'nekobase_us' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'nekobase_us' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'rnyukkb27cat' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':@zd$UT;2~a<r6,3F(>O4h:/d-JOJEn)$AJ8+K46[^BEluK71)8DF9dy!ncx)-N<' );
define( 'SECURE_AUTH_KEY',  'i/H7/J}8R??6(H`2TM]D& ,=<e?x(k/3N%GFrKivX|%8T^Bd zFl$EIf<}[e6j2c' );
define( 'LOGGED_IN_KEY',    'sp_xsGdd$VV9fTlq0-bqwJ9[s?9@!3BAP8QWZh[`cHr<DxD51dDD?kfKMirT*<sc' );
define( 'NONCE_KEY',        'ykAyu:jk2Y?t{LKkLm_}*$E6ZiOyNn+3`,+,PJY^i7C6MZY>nG,i7t_8KFzE*^LX' );
define( 'AUTH_SALT',        '0YJ.*!3uA!!R3 8^B-GMfc6=!;zw-wcUa[BlS?5ui1BQf8tr6Y5%EC^UJo_>xEZ7' );
define( 'SECURE_AUTH_SALT', '=@n|px .L+jn`e;5J>A)YSLmEHQ0loK3;wfdv*cI6?YpG9 2kia=RUV?UeJ2jl6%' );
define( 'LOGGED_IN_SALT',   '^2}a/hq4.tqbl{~*]t+`RbU020g@TUOzut-eGq,~koBe}zsSo%^%#I~+w|8[SEac' );
define( 'NONCE_SALT',       '?p,/vgwi}.DPf%L0{dw~&eIU3i^((jU$v9t_a>])d;Ivc(3xf:HNc7:k#GvG?*C!' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

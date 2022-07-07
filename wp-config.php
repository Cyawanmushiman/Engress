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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'Engress' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fX>x.,O%,9|EzCQ2:j&%StW^`(k~Q=(aY0>AHx!xn@x+Vt>YQs8ApHMpWP3o#u+s' );
define( 'SECURE_AUTH_KEY',  'nPUpl+LD4]dv:O.4`H4# n0;h+5CC/vpCq20]6eFJnX+Vf=2L?61cx 2)e)Fihu}' );
define( 'LOGGED_IN_KEY',    'jMfggK:aahs cCGsBG;|G_ZB8[TRrJ;Wp HxB]N{|aAq@[2LX.rW+eD`I_,%y}F~' );
define( 'NONCE_KEY',        'Xx/!|4ul CH EJ;B#3AefOnWpxrYb!`6`]8`*2x726p$Tx`t+va;9_#n0@FvzcdE' );
define( 'AUTH_SALT',        '}$p*i_{&?R!kC_BcxbNywrgs(7W(/;|oiK7F~M- P>h_e`u=qrla} y,x?7p9H{~' );
define( 'SECURE_AUTH_SALT', 'wACbvo[la]rijD_q)WnI6z}AvP|/* (z)2<2H_Pg|h*ltQA-2>$-dR:>u9-[OW2e' );
define( 'LOGGED_IN_SALT',   'zj45Xqjo1oa`:aDu~@KhPLn)Agq<;.{,9oI59:m~i:mAN#~ QC}p],nux,ViJ3^z' );
define( 'NONCE_SALT',       '$`ST];:VgM-E7M6nF<w|`Jgq7P8^7MiHiv@=s95e/%:|[P9$W<{A2p3%%b;cIc;}' );

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
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

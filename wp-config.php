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
define('DB_NAME', 'LAA1136224-8gkxvs');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA1136224');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'PEiGyE0w');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql143.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '[zm;%,.^79la)0V}ab+b.,5c)LET68ML!~XQ2<!YZbLX@g;i(-]zEBIIby;=JNgk');
define('SECURE_AUTH_KEY', '-udinpAnD5;NkFzB0fjFn9::@2*>.er_oj}3`Z#L~m&p2MQkcZU2s{_!iLd8,gNw');
define('LOGGED_IN_KEY', 'd[EVT1p+1xO7#d-Wsn)hQ!aG~PJxw8R_&d0e3PUKpCDjBc@m_=-)k@$>XT|gN-5A');
define('NONCE_KEY', 'PGK.L6Kt9UNt9Q&oNk.7vOmz:De?B14sak=}a(y0U*gU{R1eWc3wMd?o$[73@[n|');
define('AUTH_SALT', 'Q$NZ/PUV2`.jo1sq!3MQ#6q?>dgA<*fT_}w,4P"Z$+R<3F*SBog9E#_.AP)zQ}My');
define('SECURE_AUTH_SALT', 'q*?>[8elC:8F::M9y`Sl2xb-UF"w9%*l"WEWfR|`qJlPpRIL/.w<_&u;9K00/zf{');
define('LOGGED_IN_SALT', 'LL9jL200)@eClE3I<S(9;lVgt&,:S^d/C7!5$lOXio7&Gc<J.`c6tEJiPWC4rf2X');
define('NONCE_SALT', '~5NZi$e%mqO_F}Faq;K">x25sW@p}o.k+&<SQ4hpyb~Qd^H_a]&(+g*UlY*=`dB4');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp1_';

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

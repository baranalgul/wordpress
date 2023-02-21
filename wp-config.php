<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'aribilisim' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k2*x=?;=2+gHmyt(}|2on3(7&]|ec%JJZ>]|w<}/ylovTmH?Jbr3_0l>wP(!~1SZ' );
define( 'SECURE_AUTH_KEY',  '(.i;08UVFdP3^<q9G6UFC#ixG-&A^E>jpUvouA|$miWS_E@K/3yWI(X7:0TBP~8h' );
define( 'LOGGED_IN_KEY',    'rh`gJAVa:Jx87,aX zq!oe?/6VVA7o$9mWaMU6Lc-X^7Yl%v/umb-y=.b0+:znN@' );
define( 'NONCE_KEY',        'd03J-TWE>t~f[Ak<[`Cv)*9)(%xJ|K*,sowm3bT.?pUY;#D`-fCOy/x+dO+|_Z1d' );
define( 'AUTH_SALT',        'Dwx<vytlr}C=nh5 ug>O6pJf$h*9<+/M:)//_=8JCW@4~hH_v>v*R@nf_;x/<#+R' );
define( 'SECURE_AUTH_SALT', 'J^73fkR(+g;(a->3o_1*tk8nAG2jGT.n`npr=VjEo;^wxo0S;{Bzg -6:ulz4C2<' );
define( 'LOGGED_IN_SALT',   'Z~v4mN$>$XJRYO8_GKA?EnI_tYo3fW d-XLWut LieA8ke8&?P{Lx/t%lIYCx;N0' );
define( 'NONCE_SALT',       'QNmqs#Z{|V$37Nw_0Tv `+M?,3#@*O!J$QGwoC|9Na>hdABRp<tUo26;Q^(:-K8&' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';
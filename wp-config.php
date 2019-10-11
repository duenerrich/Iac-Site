<?php
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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'iacwp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'quC>vyg~|qd<B:q-dvdvvUhI7G RRwC2.)^Jj0RhQ|MQad|jdy_gxk&O0We;(X_g' );
define( 'SECURE_AUTH_KEY',  '}Agd$+ALy^2k]2AD7*@1z@F^{RCHk5I+tiF~;]E[b+uzC[+}kp#*k!@bGdb[>u>6' );
define( 'LOGGED_IN_KEY',    '2A$9E)bJBNAz6PV5xLL#~p&)Vv q1Jv@#fR50lNjZ@}p)n~SmKTQC&et`m6VQLoJ' );
define( 'NONCE_KEY',        '/TWX50wUKaJh.?O>I^{0{A|?XKuO>~lam4SZ8z&$L!rR%`ey{,F%$jB`vOl5{iSh' );
define( 'AUTH_SALT',        'eG7G;uF@82OCM]7=CQH=0eF7(rU42wJAu?S//5W_{O2;igg;F+Ro1f9n.gw-FV@j' );
define( 'SECURE_AUTH_SALT', '<P$Sx,!UG4U#T=~X18z=ppC1.RN[@L7T)VHt/+eiFe^k7e`YRM`4i?la/}=qnRsd' );
define( 'LOGGED_IN_SALT',   'xcx31)=8(}*qP4SJHrFXpo,C1%cfxm-X&gf[zwP>7~~4F<s[h^C~vsZ(L87A^8hB' );
define( 'NONCE_SALT',       '}Z`GPKC12@2b^}HQLhcF8kW5xb5*t(&TZae{^#;s)cwutHs#L_`=~8G^VPx&n[UO' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'apde_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'SUp1>W=p$FcC^!ywORMy%4a5G~TG7{_7cf[zQ6MJ,H@3&,GYcYSWN1!eb*N;d$EP');
define('SECURE_AUTH_KEY',  '.oFZ)!, }&,Y!Uo%jnaGsV)KZzb[4CE~^+}OqM=+XrI?!{+Gh%beIQd }JOA}vt3');
define('LOGGED_IN_KEY',    'UfjoPNDR^LxHrRd(xH}w2>8UC5A-_KQ6aJS+xOuLD]9n508qu.am1xr&$feis.TG');
define('NONCE_KEY',        '^4%Ce4~Mb_UG,;l<yA~y9rjHn&vLnn[;+~4GZk:C4[,^1W!^s)L=uA,y:L> uP_.');
define('AUTH_SALT',        ')p+rFia-j+X!x|9y,sefG0eNuNsME9s2#AyI!okq(cJXM%6/lx@dZ}F^rLx}mu+C');
define('SECURE_AUTH_SALT', '(~n6!_hfRi2 9}!ON?ui4P_/&z!O}k~nEK-,1LP!S,7F %QSerfzK/6&1DDV}Ph ');
define('LOGGED_IN_SALT',   '~Xj01HqGw5TLsQV$Yu$U&Q:EkD2soIDn_zXc+FXC:s*+_vxJ54cF3Dm$#?2d$huL');
define('NONCE_SALT',       '8c }D2i^{Bzl6ZLyYb0->W? ^D]d]NB}rTW=mV+YOi4&up`k7i=Y?6!KeH=K5U+L');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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

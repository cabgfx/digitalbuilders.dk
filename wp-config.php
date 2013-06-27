<?php
require_once 'config/bootstrap.php';

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         ',?M1.6r`+dN}r2,F/7P7lB?i![R9S*GN]}O0axV4L@iHEq[-I)6Ytf>}M|cQ3F3`');
define('SECURE_AUTH_KEY',  '&9D!E6gHsHFkB5}1A3|J56_?PR3 O-ze,+FH+%AoI8%>+!&K7a*#>`kOh=26TQ7l');
define('LOGGED_IN_KEY',    '&wwwWeld#/sw&*pz-CadH+}+e*%%2Z:e=3ldDBz+2uvpS7OkfP.Jn}{zyK?9,?VF');
define('NONCE_KEY',        '/zP>N%APJERWfl(!a.L Tnm16;lq6<Ojf3h-*R0Xz`P!=L)B@~Zn*rSCZI&T88V)');
define('AUTH_SALT',        'za|Sa_Q=@fT?5#f -Y*XA/v15+{qia G7,].sh/b!P~QPp)$iIhz::F-xXP%D]Y+');
define('SECURE_AUTH_SALT', 'wEc#5VX;~c#tD`[v/T)3:m=AX-;$Nu:(P}mvK`3L*I5C,}c6|MO[Y*=OA_ZjcJl#');
define('LOGGED_IN_SALT',   'S!Y3jr3wtRL)s}8t8PJneIB-@$%L|%8+eLZ[(zF|v3&7lg8 ReCbF=8{eOTD9B<+');
define('NONCE_SALT',       't+6$z$+dm^cM[_BqSbfg]?X?~}MN+1{#[!=KbzE4W-r8;;qL?;h}~wQw@mfHmoNl');

$table_prefix  = 'wp_';
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
?>

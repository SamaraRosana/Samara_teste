<?php				
		
	define('DB_NAME', 'samara_teste');				
	
	define('DB_USER', 'root');				
		
	define('DB_PASSWORD', '');

	define('DB_HOST', 'localhost');	

		if ( !defined('ABSPATH') )	
				define('ABSPATH', dirname(__FILE__) . '/');					

		if ( !defined('BASEURL') )			
			define('BASEURL', '/samara_teste/');					

		if ( !defined('DBAPI') )			
			define('DBAPI', ABSPATH . 'inc/database.php');

	define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
	define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
	define('FOOTER_TEMPLATE_PASS', ABSPATH . 'inc/footer_pass.php');
	define('FOOTER_TEMPLATE_COR', ABSPATH . 'inc/footer_cor.php')
?>		
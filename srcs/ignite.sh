service	mysql		start
mysql		<	init_wordpress.sql
service	php7.3-fpm	start
nginx -g "daemon off;"
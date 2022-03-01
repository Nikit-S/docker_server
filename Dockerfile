FROM debian:buster

COPY	./srcs/install_script.sh .
RUN	mkdir temp 
RUN	apt-get -y update
RUN	apt-get -y upgrade
RUN	apt-get -y install apt-utils
RUN	apt-get -y install vim
RUN	apt-get -y install nginx
RUN	apt-get -y install php7.3-common
RUN	apt-get -y install php7.3-fpm
RUN	apt-get -y install default-mysql-server
RUN	apt-get -y install php7.3-mysql
RUN	apt-get -y install php7.3-xml

ADD	https://wordpress.org/latest.tar.gz .
RUN mkdir var/www/html/wordpress && tar -C var/www/html/wordpress -zxvf latest.tar.gz --strip-components 1 && rm latest.tar.gz

ADD	https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz .
RUN	mkdir var/www/html/phpmyadmin && tar -C var/www/html/phpmyadmin -zxvf phpMyAdmin-latest-all-languages.tar.gz --strip-components 1 && rm phpMyAdmin-latest-all-languages.tar.gz

COPY	./srcs/default		/etc/nginx/sites-available
COPY	./srcs/info.php		/var/www/html
COPY	./srcs/config.inc.php	/var/www/html/phpmyadmin
COPY	./srcs/ignite.sh	.
COPY	./srcs/wp-config.php	/var/www/html/wordpress
COPY	./srcs/init_wordpress.sql	.
COPY	./srcs/private.key	/etc/nginx/ssl/
COPY	./srcs/ssl.crt		/etc/nginx/ssl/
COPY	./srcs/autoindex_switch.sh	.

EXPOSE	80	443

ENTRYPOINT			bash ignite.sh

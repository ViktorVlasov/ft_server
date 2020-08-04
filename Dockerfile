FROM debian:buster
LABEL maintainer="efumiko vlasov_viktor01@mail.ru"

# Install LEMP
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get install -y \
    nginx \
    mariadb-server mariadb-client \
    wget curl \
    php-fpm php-mysql php-common php-curl php-gd php-intl \
    php-mbstring php-soap php-xml php-xmlrpc php-zip


# Download phpmyadmin and wp
WORKDIR /var/www/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz && \
    wget https://wordpress.org/latest.tar.gz && \
    tar -xvzf latest.tar.gz && \
    tar -xvzf phpMyAdmin-5.0.2-all-languages.tar.gz && \
    mv phpMyAdmin-5.0.2-all-languages wordpress/phpmyadmin && \
    rm -rf /var/www/latest.tar.gz /var/www/phpMyAdmin-5.0.2-all-languages.tar.gz

COPY srcs/ .

#SSL
RUN mv ssl-files/nginx-selfsigned.crt /etc/ssl/certs/ && \
    mv ssl-files/nginx-selfsigned.key /etc/ssl/private/ && \
    mv ssl-files/dhparam.pem /etc/nginx && \
    mv ssl-files/self-signed.conf /etc/nginx/snippets/ && \
    mv ssl-files/ssl-params.conf /etc/nginx/snippets/

# configs
RUN mv /var/www/ft_server.conf /etc/nginx/sites-available/ && \
    ln -s /etc/nginx/sites-available/ft_server.conf /etc/nginx/sites-enabled/ft_server.conf && \
    mv wp-config.php /var/www/wordpress && \
    chown -R www-data:www-data /var/www/wordpress && \
    chown -R www-data:www-data /var/www/wordpress/phpmyadmin && \
    chmod 777 -R /var/www/*

# Listens 80 and 443 ports
EXPOSE 80 443

CMD ["bash", "start.sh"]
FROM php:7-apache

# RUN mkdir /app

# RUN mkdir /etc/apache2/sites-available/ssl

# COPY .docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

#WORKDIR /app

# RUN chown -R www-data:www-data /app && a2enmod rewrite ssl

RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

COPY ./ssl/*.pem /etc/apache2/ssl/
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
EXPOSE 443


FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

RUN usermod -u 1000 www-data
RUN sed -ri 's/^www-data:x:82:82:/www-data:x:1000:50:/' /etc/passwd
RUN chown -R www-data:www-data /var/www/html
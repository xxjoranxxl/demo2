FROM php:8.1-apache

RUN apt-get update && app-get install -y \
    libpq-dev \ 
    && docker-php-ext-install pdo pdo_pgsql pdo_pgsql




COPY . /var/www/html/

EXPOSE 80
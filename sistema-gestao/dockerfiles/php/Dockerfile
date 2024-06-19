FROM php:8.1-fpm

RUN apk add --no-cache openssl mysql-client nodejs npm \
RUN docker-php-ext-install pdo pdo_mysql bcmath

WORKDIR /var/www

RUN rm -rf /var/www/html
RUN ln -s public html

RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


EXPOSE 9000

ENTRYPOINT ["php-fpm"]

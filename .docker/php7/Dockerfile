FROM php:latest

RUN apt-get update

RUN apt-get install -y \
    git \
    unzip

RUN pecl install xdebug-2.9.4 \
    && docker-php-ext-enable xdebug

RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer
RUN chmod +x /usr/bin/composer

WORKDIR /jigsaw

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
ENTRYPOINT ["bash", "/usr/local/bin/entrypoint.sh"]

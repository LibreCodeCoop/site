FROM php:8.4-fpm

RUN apt-get update \
    && apt-get install -y \
        git \
        espeak-ng \
    # Clean package cache
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions and Composer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod uga+x /usr/local/bin/install-php-extensions && sync \
    && install-php-extensions \
    gd \
    xdebug \
    zip \
    @composer \
    && rm /usr/local/bin/install-php-extensions

COPY xdebug.ini /usr/local/etc/php/conf.d/

# Install NVM
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash \
    && export NVM_DIR="/root/.nvm" \
    && . "$NVM_DIR/nvm.sh" \
    && nvm install 20 \
    && nvm alias default 20

ENV NVM_DIR   /root/.nvm
ENV NODE_PATH $NVM_DIR/v20/lib/node_modules
ENV PATH      $NVM_DIR/v20/bin:$PATH

RUN echo "alias jigsaw=./vendor/bin/jigsaw" >> /etc/bash.bashrc && \
    echo "alias compile='./vendor/bin/jigsaw build'" >> /etc/bash.bashrc && \
    /bin/bash -c "source /etc/bash.bashrc"

WORKDIR /var/www/html

COPY entrypoint.sh /var/www/scripts/
ENTRYPOINT [ "bash", "/var/www/scripts/entrypoint.sh" ]

FROM php:latest

RUN apt-get update

RUN apt-get install -y \
    git \
    unzip

RUN pecl install xdebug-2.9.4 \
    && docker-php-ext-enable xdebug

RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer
RUN chmod +x /usr/bin/composer

ENV NVM_DIR=/opt/nvm
RUN git clone https://github.com/nvm-sh/nvm.git $NVM_DIR
RUN cd $NVM_DIR && \
    git checkout `git describe --abbrev=0 --tags --match "v[0-9]*" $(git rev-list --tags --max-count=1)` && \
    . $NVM_DIR/nvm.sh && \
    nvm install 13 && \
    nvm use node
RUN echo "source ${NVM_DIR}/nvm.sh" > $HOME/.bashrc

WORKDIR /jigsaw

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
ENTRYPOINT ["bash", "/usr/local/bin/entrypoint.sh"]

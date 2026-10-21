FROM php:8.4.27-fpm

# Stop builds before publication when upstream PHP still lacks the October 2026 RCE fixes.
# CVE-2026-109618 / CVE-2026-109619; unsupported PHP branches fail closed.
RUN php -r '$minimum = ["8.2" => "8.2.35", "8.3" => "8.3.36", "8.4" => "8.4.27", "8.5" => "8.5.12"]; $series = PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION; if (!isset($minimum[$series]) || version_compare(PHP_VERSION, $minimum[$series], "<")) { fwrite(STDERR, "Unpatched or unsupported PHP runtime: " . PHP_VERSION . PHP_EOL); exit(1); }'


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
RUN export NVM_DIR="/usr/local/nvm" \
    && mkdir -p "$NVM_DIR" \
    && curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/master/install.sh | bash \
    && . "$NVM_DIR/nvm.sh" \
    && nvm install 24 \
    && nvm alias default 24 \
    && NODE_VERSION="$(nvm version default)" \
    && ln -s "$NVM_DIR/versions/node/$NODE_VERSION/bin/node" /usr/local/bin/node \
    && ln -s "$NVM_DIR/versions/node/$NODE_VERSION/bin/npm" /usr/local/bin/npm \
    && ln -s "$NVM_DIR/versions/node/$NODE_VERSION/bin/npx" /usr/local/bin/npx \
    && echo 'export NVM_DIR="/usr/local/nvm"' > /etc/profile.d/nvm.sh \
    && echo '[ -s "$NVM_DIR/nvm.sh" ] && \. "$NVM_DIR/nvm.sh"' >> /etc/profile.d/nvm.sh

RUN echo "alias jigsaw=./vendor/bin/jigsaw" >> /etc/bash.bashrc && \
    echo "alias compile='./vendor/bin/jigsaw build'" >> /etc/bash.bashrc && \
    /bin/bash -c "source /etc/bash.bashrc"

WORKDIR /var/www/html

COPY entrypoint.sh /var/www/scripts/
ENTRYPOINT [ "bash", "/var/www/scripts/entrypoint.sh" ]

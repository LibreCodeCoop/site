#!/bin/bash

. "$NVM_DIR/nvm.sh"

# Set uid of host machine
usermod --non-unique --uid "${HOST_UID}" www-data
groupmod --non-unique --gid "${HOST_GID}" www-data

if [ ! -d "vendor" ]; then
    composer i
fi
php-fpm &
if [[ "$SERVER_MODE" == 'watch' ]]; then
    npm run watch
else
    php ./vendor/bin/jigsaw serve --host 0.0.0.0 --port 3000
fi

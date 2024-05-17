#!/bin/bash

# Composer
if [ ! -d "vendor" ]; then
    composer global require hirak/prestissimo
fi
composer install

# NPM
. $NVM_DIR/nvm.sh
if [ ! -d "node_modules" ]; then
    npm install
fi
npm run watch
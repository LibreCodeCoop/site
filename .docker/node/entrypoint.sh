#!/bin/bash
if [ ! -f /usr/local/bin/yarn ]; then
  npm i -g yarn
fi

if [ ! -d node_modules ]; then
  echo "Install packages"
  yarn
fi
echo "Done"

if [ ! -d .next ]; then
  echo "Building"
  yarn build
fi
echo "Done"

yarn dev

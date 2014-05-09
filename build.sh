#!/usr/bin/env bash

echo "Updating Ruby Gems..."
sudo gem update --system

echo "Installing Compass and Sass..."
sudo gem install compass

set -e

# Base directory for this entire project
BASEDIR=$(cd $(dirname $0) && pwd)
echo "BASEDIR: " $BASEDIR

echo "Installing Grunt CLI Globally ..."
sudo npm install grunt-cli@0.1.11 -g

npm install --save-dev

cd Webclient
npm install --save-dev

cd ../WebSublimateCMS
npm install --save-dev

cd ../Commons
npm install --save-dev
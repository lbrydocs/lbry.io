#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"


if [ ! -e "data/config.php" ]; then
  cp "$DIR/data/config.php.example" "$DIR/data/config.php"
fi

# Install the dependecies
php composer.phar install


php7.0 --server localhost:8000 --docroot "$DIR/web" "$DIR/web/index.php"

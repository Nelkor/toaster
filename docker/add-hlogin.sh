#!/bin/sh

composer require --working-dir=/hleb phphleb/hlogin
php /hleb/console phphleb/hlogin --add
composer dump-autoload --working-dir=/hleb
php /hleb/console hlogin/create-login-table-task
php /hleb/console --clear-cache
php /hleb/console --clear-routes-cache
chown -R www-data:www-data /hleb
chmod -R 777 /hleb

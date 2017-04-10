#!/bin/sh

php /var/www/citylit/artisan queue:work database --queue default,emails --sleep 3 --tries 3 --daemon

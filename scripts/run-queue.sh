#!/bin/sh

php /var/www/citylit/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/create4dementia/artisan queue:work database --queue default,emails --sleep 3 --tries 3

echo "Queue ran for citylit, create4dementia";

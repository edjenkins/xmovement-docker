#!/bin/sh

# EventMovement
php /var/www/citylit/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/demo/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/master/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/ssc/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/vfne/artisan queue:work database --queue default,emails --sleep 3 --tries 3

# Launchspot
php /var/www/create4dementia/artisan queue:work database --queue default,emails --sleep 3 --tries 3
php /var/www/stanley/artisan queue:work database --queue default,emails --sleep 3 --tries 3

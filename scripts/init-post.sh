#!/bin/sh

# If no deployment is set then default to all deployments
if [ -z "$1" ]
  then
    echo "No arguments supplied defaulting to all deployments"
  	DEPLOYMENTS=*/;
fi

# Loop through deployments
for i in $DEPLOYMENTS
do

	echo "Configuring deployment - $i"

	cd $i

	# Set dir permissions
	echo "Setting dir permissions for $i";
	chmod -R ugo+rw ./resources/lang
	chmod -R ugo+rw ./storage
	chmod -R ugo+rw ./bootstrap/cache

	# Remove composer lock file
	echo "Removing composer lock file for $i";
	rm ./composer.lock

	# Copy cached dependencies into site dir
	echo "Copying vendor files for $i";
	cp -R /tmp/vendor ./
	echo "Copying node_modules for $i";
	cp -R /tmp/node_modules ./
	echo "Copying bower_components for $i";
	cp -R /tmp/bower_components ./

	# Composer
	echo "Composer tasks for $i";
	composer dump-autoload
	composer install -v

	# Artisan commands
	php artisan migrate --force
	php artisan db:seed --force --class=DynamicConfigSeeder
	php artisan vendor:publish --force
	# php artisan translate:import
	php artisan translate:export
	php artisan cache:clear

	# Install new dependencies
	# npm install
	# bower install --allow-root

	# Run gulp
	echo "Running gulp for $i";
	gulp

	echo "Deployment now configured - $i"

	cd ..

done

tail -f /dev/null

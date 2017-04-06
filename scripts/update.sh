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

  # Publish vendor files
	php artisan vendor:publish --force

  # Run gulp
	echo "Running gulp for $i";
	gulp

	echo "Deployment now configured - $i"

	cd ..

done

tail -f /dev/null

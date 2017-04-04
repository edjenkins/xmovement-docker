#!/bin/sh

read -p 'Which branch do you want to checkout (e.g. deploy): ' branch
read -p 'Fetch deployment? (y/n): ' fetchDeployment
read -p 'Fetch translations? (y/n): ' fetchTranslations
read -p 'Remove containers (y/n): ' removeContainers

# Remove docker existing containers
if [ "$removeContainers" = "y" ] || [ "$removeContainers" = "" ]
  then
    echo "Removing containers..."
    docker-compose stop
    docker-compose rm -f
fi

# If no branch is set then default to a specific branch
if [ "$branch" = "" ]
  then
    echo "No branch selected defaulting to deploy branch..."
	  branch="deploy"
fi

# Remove all existing sites files from the workspace
rm -rf ./deployments/*

# Copy required init scrips
cp ./scripts/* ./deployments

# Loop through sites
for i in "citylit" "ssc"
do
	# Make the site dir if it doesn't already exist
	mkdir -p ./deployments/$i

  # Set location of git work trees
	MAIN_WORK_TREE=./deployments/$i
	DEPLOYMENTS_WORK_TREE=./deployments/$i/packages/deployment
	TRANSLATIONS_WORK_TREE=./deployments/$i/resources/lang

	# Checkout and pull the given branch into the site dir
	echo "Fetching main repo - $branch"
  git clone --depth=1 --branch=$branch git@github.com:edjenkins/xmovement.git $MAIN_WORK_TREE

	# Copy the appropriate config files from the configs dir into the site's dir
	echo "Copying config files - $i"
	cp ./configs/$i/.env ./deployments/$i/

  if [ "$fetchDeployment" = "y" ] || [ "$fetchDeployment" = "" ]
    then
		# Create the deployment package dir and pull the branch with the same name as the site dir
		echo "Fetching deployments repo - $i"
		mkdir -p $DEPLOYMENTS_WORK_TREE
    git clone --depth=1 --branch=$i git@github.com:edjenkins/xmovement-deployments.git $DEPLOYMENTS_WORK_TREE
	fi

	if [ "$fetchTranslations" = "y" ] || [ "$fetchTranslations" = "" ]
	  then
		# Create the lang dir and pull the branch with the same name as the site dir
		echo "Fetching translations repo - $i"
		mkdir -p $TRANSLATIONS_WORK_TREE
    git clone --depth=1 --branch=$i git@github.com:edjenkins/xmovement-translations.git $TRANSLATIONS_WORK_TREE
	fi

done

# Rebuild and launch docker containers
docker-compose build # --no-cache
docker-compose up -d
docker-compose logs -f --tail 100 workspace

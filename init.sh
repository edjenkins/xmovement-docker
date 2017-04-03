#!/bin/sh

read -p 'Remove containers (y/n): ' removeContainers
read -p 'Which branch do you want to checkout (e.g. deploy): ' branch
read -p 'Fetch deployment? (y/n): ' fetchDeployment
read -p 'Fetch translations? (y/n): ' fetchTranslations

# Remove docker existing containers
if [ "$removeContainers" = "y" ]
  then
    echo "Removing containers..."
    cd laradock && docker-compose stop && docker-compose rm -f && cd ..
fi

# If no branch is set then default to a specific branch
if [ "$branch" = "" ]
  then
    echo "No branch selected defaulting to deploy branch..."
	  branch="deploy"
fi

# Remove all existing sites files from the workspace
rm -R ./deployments/*

# Copy required init scrips
cp ./scripts/* ./deployments

# Set location of git directories
MAIN_GIT_DIR=./repos/xmovement.git
DEPLOYMENTS_GIT_DIR=./repos/xmovement-deployments.git
TRANSLATIONS_GIT_DIR=./repos/xmovement-translations.git

# Loop through sites
for i in # "siteA" "siteB" "siteC"
do
	# Make the site dir if it doesn't already exist
	mkdir -p ./deployments/$i

  # Set location of git work trees
	MAIN_WORK_TREE=./deployments/$i
	DEPLOYMENTS_WORK_TREE=./deployments/$i/packages/deployment
	TRANSLATIONS_WORK_TREE=./deployments/$i/resources/lang

	# Checkout and pull the given branch into the site dir
	echo "Fetching main repo - $branch"
	git --work-tree=$MAIN_WORK_TREE --git-dir=$MAIN_GIT_DIR config remote.origin.fetch '+refs/heads/*:refs/remotes/origin/*'
	git --work-tree=$MAIN_WORK_TREE --git-dir=$MAIN_GIT_DIR fetch --all
	git --work-tree=$MAIN_WORK_TREE --git-dir=$MAIN_GIT_DIR checkout -f $branch
	git --work-tree=$MAIN_WORK_TREE --git-dir=$MAIN_GIT_DIR reset --hard origin/$branch

	# Copy the appropriate config files from the configs dir into the site's dir
	echo "Copying config files - $i"
	cp ./configs/$i/.env ./deployments/$i/

  $branch_repo = $i

  # if [ $branch_repo = 'xmovement' ]
  #   then
  #     read -p 'Which deployment are you workin on? (e.g. citylit): ' branchRepo
  #     $branch_repo=branchRepo
  # fi

  if [ "$fetchDeployment" = "y" ]
    then
		# Create the deployment package dir and pull the branch with the same name as the site dir
		echo "Fetching deployments repo - $branch_repo"
		mkdir -p $DEPLOYMENTS_WORK_TREE
		git --work-tree=$DEPLOYMENTS_WORK_TREE --git-dir=$DEPLOYMENTS_GIT_DIR config remote.origin.fetch '+refs/heads/*:refs/remotes/origin/*'
		git --work-tree=$DEPLOYMENTS_WORK_TREE --git-dir=$DEPLOYMENTS_GIT_DIR fetch --all
		git --work-tree=$DEPLOYMENTS_WORK_TREE --git-dir=$DEPLOYMENTS_GIT_DIR checkout -f $branch_repo
		git --work-tree=$DEPLOYMENTS_WORK_TREE --git-dir=$DEPLOYMENTS_GIT_DIR reset --hard origin/$branch_repo
	fi

	if [ "$fetchTranslations" = "y" ]
	  then
		# Create the lang dir and pull the branch with the same name as the site dir
		echo "Fetching translations repo - $branch_repo"
		mkdir -p $TRANSLATIONS_WORK_TREE/en
		git --work-tree=$TRANSLATIONS_WORK_TREE --git-dir=$TRANSLATIONS_GIT_DIR config remote.origin.fetch '+refs/heads/*:refs/remotes/origin/*'
		git --work-tree=$TRANSLATIONS_WORK_TREE --git-dir=$TRANSLATIONS_GIT_DIR fetch --all
		git --work-tree=$TRANSLATIONS_WORK_TREE --git-dir=$TRANSLATIONS_GIT_DIR checkout -f $branch_repo
		git --work-tree=$TRANSLATIONS_WORK_TREE --git-dir=$TRANSLATIONS_GIT_DIR reset --hard origin/$branch_repo
	fi

done

# Rebuild and launch docker containers
cd laradock
docker-compose build # --no-cache
docker-compose up -d
docker-compose logs -f --tail 100 workspace
cd ../

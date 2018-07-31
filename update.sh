#!/bin/sh

read -p 'Which branch do you want to checkout (e.g. release): ' branch
read -p 'Which deployment do you want to update (e.g. demo): ' deployment

# If no branch is set then default to a specific branch
if [ "$branch" = "" ]
  then
    echo "No branch selected defaulting to release branch..."
    branch="release"
fi

# If no deployment is set then default to a specific deployment
if [ "$deployment" = "" ]
  then
    echo "No deployment selected defaulting to demo deployment..."
    deployment="demo"
fi

# Make the site dir if it doesn't already exist
mkdir -p ./deployments/$deployment

# Set location of git work trees
MAIN_WORK_TREE=./deployments/$deployment
DEPLOYMENTS_WORK_TREE=./deployments/$deployment/packages/deployment
TRANSLATIONS_WORK_TREE=./deployments/$deployment/resources/lang

# Checkout and pull the given branch into the site dir
echo "Fetching main repo - $branch"
git clone --depth=1 --branch=$branch git@github.com:edjenkins/xmovement.git $MAIN_WORK_TREE

# Copy the appropriate config files from the configs dir into the site's dir
echo "Copying config files - $deployment"
cp ./configs/$deployment/.env ./deployments/$deployment/

# Fetch deployment
# Create the deployment package dir and pull the branch with the same name as the site dir
echo "Fetching deployments repo - $deployment"
rm -r $DEPLOYMENTS_WORK_TREE
mkdir -p $DEPLOYMENTS_WORK_TREE
git clone --depth=1 --branch=$deployment git@github.com:edjenkins/xmovement-deployments.git $DEPLOYMENTS_WORK_TREE

# Fetch translations
# Create the lang dir and pull the branch with the same name as the site dir
echo "Fetching translations repo - $deployment"
rm -r $TRANSLATIONS_WORK_TREE
mkdir -p $TRANSLATIONS_WORK_TREE
git clone --depth=1 --branch=$deployment git@github.com:edjenkins/xmovement-translations.git $TRANSLATIONS_WORK_TREE

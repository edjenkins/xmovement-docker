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

# Set location of git work trees
MAIN_WORK_TREE=./deployments/$deployment
DEPLOYMENTS_WORK_TREE=./deployments/$deployment/packages/deployment
TRANSLATIONS_WORK_TREE=./deployments/$deployment/resources/lang

# Checkout and pull the given branch into the site dir
echo "Fetching main repo - $branch"
git -C $MAIN_WORK_TREE pull

# Fetch deployment
# Create the deployment package dir and pull the branch with the same name as the site dir
echo "Fetching deployments repo - $deployment"
git -C $DEPLOYMENTS_WORK_TREE pull

# Fetch translations
# Create the lang dir and pull the branch with the same name as the site dir
echo "Fetching translations repo - $deployment"
git -C $TRANSLATIONS_WORK_TREE pull

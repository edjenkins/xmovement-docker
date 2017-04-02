#!/bin/sh

read -p 'Please enter the name of the deployment you wish to work on (e.g. citylit): ' deployment

cd xmovement/resources/lang

git checkout origin $deployment

cd ../../packages/deployment

git checkout origin $deployment

cd ../../../

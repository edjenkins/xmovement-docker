#!/bin/sh

read -p 'Please enter the name of the deployment you wish to work on (e.g. citylit): ' deployment

cd configs
cd $deployment
cp ./.env ../../xmovement/
cd ../../

rm -rf xmovement/resources/assets/stylus/deployment/*
rm -rf xmovement/resources/views/deployment/*

cd xmovement/resources/lang

git checkout $deployment

cd ../../packages/deployment

git checkout $deployment

cd ../../../

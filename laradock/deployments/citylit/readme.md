XMovement
============
A core open source framework on which crowd commissioning platforms can be developed.

License
----------------
Licenced under the Apache License v2.0:

http://www.apache.org/licenses/LICENSE-2.0

Software included in the App Movement distribution
----------------
Laravel (MIT) by Laravel : [https://github.com/laravel/laravel](https://github.com/laravel/laravel)

jQuery File Upload (MIT) by @blueimp : [https://github.com/blueimp/jQuery-File-Upload](https://github.com/blueimp/jQuery-File-Upload)


Get Started
============

Requirements
----------------
Homestead (vagrant)

Environment Setup
----------------
Navigate to homestead folder

cd ~/Homestead && vagrant up && vagrant ssh

php /home/vagrant/Code/artisan migrate:refresh --seed
sudo cp /home/vagrant/Code/supervisor/laravel-email-worker.conf /etc/supervisor/conf.d/laravel-email-worker.conf
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start laravel-email-worker:*

Migrate and seed the database
----------------
artisan migrate:refresh --seed

vagrant destroy --force

Gulp for preprocessing
----------------
Remember 'gulp watch' for monitoring changes to styling

npm install --global gulp

npm install

Useful snippets
----------------
Update NULL translations from another translation table in the database:
UPDATE translations INNER JOIN new_translations ON translations.key = new_translations.key AND translations.group = new_translations.group SET translations.value = new_translations.value WHERE translations.value IS NULL;

Built with Laravel PHP Framework
----------------
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

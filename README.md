# Getting Started

## Required files
The following files are ignored from the repo because they contain private keys, please obtain copies from the main contributor.

`laradock/.env`

`xmovement/.env`

## Development

All development changes should be made in the xmovement directory.
The deployment package and translation files should be cloned into the appropriate directories.

`deployment -> /packages/deployment`

`translations -> /resources/lang`

#### Switching deployment (during development)

Simply run the switch.sh script in the root of the project and follow the instructions given.


## Adding a deployment

__Config -__
Add .env file with deployment config - configs/DEPLOYMENT/.env

__Database -__
Create database in the startup script - laradock/mysql/startup

__Init script -__
Add the name of the project to the initialisation loop in the init.sh and prod-init.sh scripts.

__Repositories -__
Create a branch with the project name for the translation files and deployment specific files.

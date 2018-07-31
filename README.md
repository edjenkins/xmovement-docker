# XMovement

> This repository contains the Docker (laradock) configuration for the [XMovement](https://github.com/edjenkins/xmovement) framework along with a set of scripts for development and deployment of the system.

> Developed at Open Lab, Newcastle University as an open-source project to support new and upcoming research projects.

## Contributors
| Name | Contribution | Contact |
| --- | --- | --- |
| `Edward Jenkins` | `Lead developer` | [edjenkins.co.uk](https://edjenkins.co.uk), [@edjenkins91](https://twitter.com/edjenkins91)|

## Associated Repositories
- [xmovement](https://github.com/edjenkins/xmovement)


## Getting Started

### Required files
The following files are not included in this repository because they contain private keys, please obtain copies from the main contributor.

`laradock/.env`

`xmovement/.env`

## Development

Changes to the framework should be made in the 'xmovement' directory and committed to the main XMovement [repository](https://github.com/edjenkins/xmovement).

The deployment package and translation files should be cloned into the appropriate directories.

```
# https://github.com/edjenkins/xmovement-deployments
deployment -> /packages/deployment
```

```
# https://github.com/edjenkins/xmovement-translations
`translations -> /resources/lang`
```

## Switching deployments
Run the 'switch.sh' script in the root of the project and follow the instructions given.


## Adding a deployment

__Config -__
Add .env file with deployment config - configs/DEPLOYMENT/.env

__Database -__
Create database in the startup script - laradock/mysql/startup

__Init script -__
Add the name of the project to the initialisation loop in the init.sh and prod-init.sh scripts.

__Repositories -__
Create a branch with the project name for the translation files and deployment specific files.


## Contributing
Please feel free to pull the code and add to it where you see fit. If you do anything interesting tweet me [@edjenkins91](https://twitter.com/edjenkins91)

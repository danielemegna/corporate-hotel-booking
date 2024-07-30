# PHP Corporate Hotel Booking Kata

Build a corporate hotel booking engine. 

Kata from codurance.com, see https://www.codurance.com/katas/corporate-hotel-booking

### Install dependencies and run tests

Install project dependencies with

```
$ ./composer.phar .... (to be completed)
```

### VSCode Dev Container setup

VSCode can use devcontainers to be configured with the proper extensions and without php executable locally installed.

In order to proceed, install the [related extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) (`ms-vscode-remote.remote-containers`) and reopen vscode in Dev Container mode.

> the first run can take some minutes to install and setup properly container and vscode extensions

If you want to open an additional bash session in the vscode container:

```
$ docker exec -it -w /workspaces/$(basename $PWD) corporate-hotel bash
# ./composer.phar .....
```

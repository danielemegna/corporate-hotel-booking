# PHP Corporate Hotel Booking Kata

Build a corporate hotel booking engine. 

Kata from codurance.com, see https://www.codurance.com/katas/corporate-hotel-booking

### Install dependencies and run tests

Install project dependencies with

```
$ ./composer.phar install
```

Run the tests with

```
$ ./composer.phar exec phpunit ./tests
```

### Docker only dev setup

Create a temporary php7 container with mapped source folder and install minimal dependencies inside:

```
$ docker run --rm -it -v $PWD:/app -w /app php:7.3.14 bash
# apt-get update && apt-get install -y git libzip-dev && docker-php-ext-install zip
```

Composer commands can be now executed in the container:

```
# ./composer.phar install
# ./composer.phar exec ....
```

Alternatively build and use the custom image defined in the `Dockerfile`:

```
$ docker build -t corporate-hotel .
$ docker run --rm -it -v $PWD:/app -w /app corporate-hotel bash
# ./composer.phar install
# ./composer.phar exec ....
```


### VSCode Dev Container setup

VSCode can use devcontainers to be configured with the proper extensions and without php executable locally installed.

In order to proceed, install the [related extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) (`ms-vscode-remote.remote-containers`) and reopen vscode in Dev Container mode.

> the first run can take some minutes to install and setup properly container and vscode extensions

If you want to open an additional bash session in the vscode container:

```
$ docker exec -it -w /workspaces/$(basename $PWD) vsc-corporate-hotel bash
# ./composer.phar install
# ./composer.phar exec ....
```

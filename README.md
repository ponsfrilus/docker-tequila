# Docker Tequila

## About

[Tequila](https://tequila.epfl.ch/) is a federated identity management system. 
It provides the means to authenticate people in a network of organizations.

> This repository allows to test the Tequila Apache module and differents 
> version of the Tequila PHP client using Docker containers.

## Apache module

This docker compile and active the "mod_tequila.so" as Apache2 module.

The [Dockerfile-Tequila](./Dockerfile-Tequila) file based on [php:7-apache](https://hub.docker.com/_/php)
proceed as follows:
  1. Get the tequila gunzip and tar x it
  1. Install wanted dependencies (apache2-dev libssl-dev)
  1. Create the default Tequila session dir
  1. Use make to compile mod_tequila.xx
  1. Use [apxs](https://httpd.apache.org/docs/2.4/en/programs/apxs.html) to create the .so
  1. Create the mod_tequila.load
  1. Enable the module
  1. Mount the `data` directory in the Docker

## PHP Client

This docker download and set up the Tequila client.
The [Dockerfile-Tequila-Client](./Dockerfile-Tequila-client) file based on [php:7-apache](https://hub.docker.com/_/php)
proceed as follows:
  1. Download and extract the Tequila client from https://tequila.epfl.ch/download/2.0/tequila-php-client-3.0.3.tgz
  1. Move the files to `/var/www/Tequila/clients/php`
  1. Mount the `data-client` directory in the Docker 

## Usage

`docker-compose up` and then head to:
* [localhost:8888](http://localhost:8888) to test the Tequila Apache Module
* [localhost:8889](http://localhost:8889) to test the Tequila PHP Client


## ToDo
  * Add the Tequila server in the docker-compose file

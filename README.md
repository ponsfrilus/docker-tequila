# Docker Tequila

This docker compile and active the "mod_tequila.so" as apache2 module.

The [Dockerfile-Tequila](./Dockerfile-Tequila) file based on [php:7.2-apache](https://hub.docker.com/_/php)
proceed as follows:
  1. Get the tequila gunzip and tar x it
  1. Install wanted dependencies (apache2-dev libssl-dev)
  1. Create the default Tequila session dir
  1. Use make to compile mod_tequila.xx
  1. Use [apxs](https://httpd.apache.org/docs/2.4/en/programs/apxs.html) to create the .so
  1. Create the mod_tequila.load
  1. Enable the module

## About
[Tequila](https://tequila.epfl.ch/) is a federated identity management system. 
It provides the means to authenticate people in a network of organizations.

## Usage
`docker-compose up` and then head to [http://localhost:8888](localhost:8888).

## ToDo
  * Add the Tequila server in the docker-compose file
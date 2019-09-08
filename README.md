# PHP 7.4 Arrow Functions Test

This is a simple Docker Compose setup and test script to see the new [PHP 7.4 arrow functions](https://wiki.php.net/rfc/arrow_functions_v2) in action.

It uses the [base PHP 7.4 image](https://github.com/devilbox/docker-php-fpm-7.4) from [devilbox.org](http://devilbox.org).

## Requirements

- [Docker Compose](https://docs.docker.com/compose/)

## Usage

```bash
$ docker-compose run --rm web php test.php
```

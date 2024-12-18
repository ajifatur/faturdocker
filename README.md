# FaturHelper

<p align="center">
  <a href="https://packagist.org/packages/ajifatur/faturdocker"><img src="https://poser.pugx.org/ajifatur/faturdocker/d/total.svg" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/ajifatur/faturdocker"><img src="https://poser.pugx.org/ajifatur/faturdocker/v/stable.svg" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/ajifatur/faturdocker"><img src="https://poser.pugx.org/ajifatur/faturdocker/license.svg" alt="License"></a>
  <a href="https://wakatime.com/@ajifatur"><img src="https://wakatime.com/badge/user/7096d127-6916-4f3e-add2-b7f5ca9e1b66/project/f840f725-5b03-4345-809c-24f1142d91ae.svg" alt="WakaTime"></a>
</p>

## Prerequisite
- Laravel >= 10

## Installation

### Download From Composer:

Run this script into your CLI:

```sh
composer require ajifatur/faturdocker
```

### Configuration:

Add this script into `config/app.php` file in `providers` section:

``` php
Ajifatur\FaturHelper\FaturDockerServiceProvider::class,
```

Run this script into your CLI every after install or update the `faturdocker`:

```sh
php artisan faturdocker:install
```

Edit `docker/mysql/init/create_databases.sql` file if you want to change or add database as you want.

Edit database configuration in `.env` file:

```sh
## DB_HOST is filled with mysql-db' container name in `docker-compose.yml`
## DB_PASSWORD is filled with MYSQL_PASSWORD in `docker-compose.yml`
DB_HOST="faturdocker-mysql"
DB_PASSWORD=secret
```

Run this script into your CLI:

```sh
docker-compose build
docker-compose up -d
```

### Enjoy!

Open `http://localhost:9000` because the web server is on `9000` port.

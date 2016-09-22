# Sand

Portable Vagrant LEMP stack

> A zero-configuration PHP development environment with Laravel optional.

Just run `vagrant up` and view your site at `http://localhost:8800`.

## What's in the Box?

- Debian 8.6
- PHP 7
- MySQL
- Vim
- Git
- Curl
- Nginx
- Composer
- Mcrypt

### Features

- Laravel ready
- Less than half size of Laravel Homestead
- Works offline

## Usage

Clone the repository and run:

```
vagrant up
```

The `public` folder is now being hosted on `http://localhost:8800`.

### Laravel

Sand ships ready for Laravel optional usage. To create a fresh Laravel installation SSH into Vagrant and run:

```
cd /var/www
laravel new laravel
```

View your Laravel site at `http://localhost:8801`.

#### Existing Laravel Projects

Clone or copy into the Sand directory as `laravel`. Match your `.env` database credentials to Sand, and then run `composer install` and `php artisan migrate`.

## Access

### MySQL Database

- Database: sand
- Username: root
- Password: root
- Hostname: localhost

Connect to the database with PHP:

```php
$connect = mysqli_connect('localhost', 'root', 'root', 'sand');
```

### SSH

- Hostname: 127.0.0.1:2222
- Username: vagrant
- Password: vagrant

Port for hostname may vary.

## Vagrant Commands

#### Start or resume

```
vagrant up
```

#### Pause

```
vagrant suspend
```

#### Delete

```
vagrant destroy
```

#### SSH

```
vagrant ssh
```


## License

[MIT License](http://opensource.org/licenses/MIT)
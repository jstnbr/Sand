# Sand

Portable Vagrant LEMP stack

> A zero-configuration PHP development environment.

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
- Less than half the size of Laravel Homestead
- Works offline

## Usage

Clone the repository and run

```
vagrant up
```

The `public` folder is now being hosted on `http://localhost:8800`.

### Laravel

To create a fresh Laravel installation run

```
vagrant ssh
cd /var/www
laravel new laravel
```

View your Laravel site at `http://localhost:8801`.

#### Existing Laravel Projects

Clone or copy your project into the Sand directory as `laravel`. Edit your `.env` to match Sand database credentials.

```
composer install
php artisan migrate
```

## Database Access

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

Hostname port may vary.

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

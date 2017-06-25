# Laravel-Hashid



## Install

``` bash
$ composer require seguce92/laravel-hashid
```

Add service provider in 'config/app.php'

``` php
'providers' => [
    ...
    Seguce92\LaravelHashid\ServiceProvider::class,
    ...
],
```

Add alias in 'config/app.php' (optionnal)

``` php
'aliases' => [
    ...
    'Hashid' => Seguce92\LaravelHashid\Facade::class,
    ...
],
```

Publish configuration

``` bash
$ php artisan vendor:publish
```

## Configuration

``` php
/**
 * Min lenght of generated Hashid
 */
'min_lenght' => 8,

/*
 * Alphabet use in Hashid generation
 */
'alphabet'   => 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789',
```

## Usage

``` php
// without custom value salt (default is app key and 'laravel-hashid')
$hashid = Hashid::encode($id); // return string

$id = Hashid::decode($hasid); // return integer

// with custom value salt
$hashid = Hashid::encode($id, $salt); // return string

$id = Hashid::decode($hasid, $salt); // return integer
```

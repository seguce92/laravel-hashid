# Laravel-Hashid

[![KissParadigm Link](https://img.shields.io/badge/Kiss-Paradigm-orange.png?style=flat-square)](https://www.kissparadigm.com)
[![Laravel Website](https://img.shields.io/badge/Laravel-5.4-orange.png?style=flat-square)](http://laravel.com)
[![Software License](https://img.shields.io/badge/License-Beerware-orange.png?style=flat-square)](LICENSE.md)
[![Beerpay](https://img.shields.io/badge/Make-Wish-orange.png?style=flat-square)](https://beerpay.io/KissParadigm/Laravel-Hashid)

Simple package for Laravel framework.

## Install

``` bash
$ composer require kissparadigm/laravel-hashid
```

Add service provider in 'config/app.php'

``` php
'providers' => [
    ...
    KissParadigm\LaravelHashid\Providers\ServiceProvider::class,
    ...
],
```

Add alias in 'config/app.php' (optionnal)

``` php
'aliases' => [
    ...
    'Hashid' => KissParadigm\LaravelHashid\Facades\Hashid::class,
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
'alphabet'   => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
```

## Usage

Trait

``` php
// top of the model
use KissParadigm\LaravelHashid\Traits\Hashidable;

// in the model class
use Hashidable;

// add to appends array
protected $appends  = [
    'hashid',
];

// Now you can use 
$model = Model::first();
$hashid = $model->hashid;
...
$model = Model::whereHashid($hashid)->first();
$id = $model->id;
```

Facade

``` php
// without custom salt (default is app key and 'laravel-hashid')
$hashid = Hashid::encode($id); // return string

$id = Hashid::decode($hasid); // return integer

// with custom salt
$hashid = Hashid::encode($id, $salt); // return string

$id = Hashid::decode($hasid, $salt); // return integer
```

Helper

``` php
// without custom salt (default is app key and 'laravel-hashid')
$hashid = hashid_encode($id); // return string

$id = hashid_decode($hasid); // return integer

// with custom salt
$hashid = hashid_encode($id, $salt); // return string

$id = hashid_decode($hasid, $salt); // return integer
```

## Remove

``` bash
$ composer remove kissparadigm/laravel-hashid
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email kissparadigm@gmail.com instead of using the issue tracker.

## Credits

- [KissParadigm](https://github.com/KissParadigm)

## License

The Beerware License (revision 42). Please see [License File](LICENSE.md) for more information.

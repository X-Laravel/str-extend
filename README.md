# Laravel Str Facade Extend

<p align="center">
<a href="https://packagist.org/packages/X-Laravel/str-extend" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Laravel/str-extend" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Laravel/str-extend" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Laravel/str-extend" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Laravel/str-extend" rel="nofollow"><img src="https://poser.pugx.org/X-Laravel/str-extend/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Laravel/str-extend" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Laravel/str-extend" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Laravel/str-extend/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Laravel/str-extend/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/322881359" rel="nofollow"><img src="https://styleci.io/repos/322881359/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Extends Laravel Str Facade with [X-Adam/string](https://github.com/X-Adam/php-string) package.

## Requirements

PHP >=7.0. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-laravel/str-extend
```

## Example Usage

```php
# Make a string's multiple space characters clear.
echo Str::multipleSpaceClear('a b  c   d     e');
# Result: 'a b c d e'.
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# HiDev PHPUnit

**HiDev plugin for PHPUnit**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-phpunit/v/stable)](https://packagist.org/packages/hiqdev/hidev-phpunit)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-phpunit/downloads)](https://packagist.org/packages/hiqdev/hidev-phpunit)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-phpunit.svg)](https://travis-ci.org/hiqdev/hidev-phpunit)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hidev-phpunit.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-phpunit/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hidev-phpunit.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-phpunit/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hidev-phpunit/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hidev-phpunit/dev-master)

[HiDev] is the automation tool mixed with code generator for easier continuous development.

This plugin enables [PHPUnit] support for HiDev.

Provides usual PHPUnit operations:

- generating `phpunit.xml.dist` and `tests/_bootstrap.php`
- running tests
- enables coverage report
- generating skeleton tests with [phpunit-skeleton-generator](https://github.com/sebastianbergmann/phpunit-skeleton-generator)

[hidev]:    https://github.com/hiqdev/hidev
[phpunit]:  https://phpunit.de/

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hidev-phpunit"
```

or add

```json
"hiqdev/hidev-phpunit": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2018, HiQDev (http://hiqdev.com/)

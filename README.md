HiDev PHPUnit
=============

**PHPUnit plugin for HiDev**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-phpunit/v/stable)](//packagist.org/packages/hiqdev/hidev-phpunit)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-phpunit/downloads)](//packagist.org/packages/hiqdev/hidev-phpunit)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-phpunit.svg)](http://travis-ci.org/hiqdev/hidev-phpunit)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hidev-phpunit/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hidev-phpunit/dev-master)

[HiDev](https://github.com/hiqdev/hidev) is a task runner, code generator and build tool for easier continuos integration.
This plugin enables [PHPUnit](https://phpunit.de/) support for HiDev.

Provides usual PHPUnit operations:
- generating phpunit.xml.dist
- running tests
- tries to create your tests compatible with Codeception
- generating skeleton tests with [phpunit-skeleton-generator](https://github.com/sebastianbergmann/phpunit-skeleton-generator) (in progress)
- coverage report (in progress)

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

Copyright © 2015, HiQDev (http://hiqdev.com/)

hiqdev/hidev-phpunit commits history
------------------------------------

## 0.3.6 2016-04-22

- Added: enabled `phpunit-skelgen` downloading
    - 152416a 2016-04-22 moved plugins requiring into composer.json (sol@hiqdev.com)
    - 8ed0463 2016-04-22 + `phpunit-skelgen` downloading options (sol@hiqdev.com)

## 0.3.5 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - 8c25d5d 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint (sol@hiqdev.com)
- Fixed `phpunit/gentest` to work when file given with extension
    - c84d9c0 2016-04-14 improved `phpunit/gentest` to work when file given with extension (sol@hiqdev.com)

## 0.3.4 2016-04-13

- Fixed build with asset-packagist
    - 111e1b0 2016-04-13 added require Yii.php to `tests/_bootstrap.php` (sol@hiqdev.com)
    - b2c5f08 2016-04-13 fixed build with asset-packagist (sol@hiqdev.com)
- Changed to `hidev-config` <- `extension-config` (sol@hiqdev.com)
    - 1c2bc27 2016-04-13 redone `extension-config` to `hidev-config` (sol@hiqdev.com)
- Fixed tests skeleton generation
    - 4bea574 2016-04-13 fixed skelgen (sol@hiqdev.com)

## 0.3.3 2016-03-30

    - c41a2a8 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` (sol@hiqdev.com)

## 0.3.2 2016-02-19

- Fixed release - repeated release to GitHub
- Fixed package description
    - 47c4424 2016-02-19 fixed package description (sol@hiqdev.com)

## 0.3.1 2016-02-19

- Added creating `tests/_bootstrap.php` if non existing
    - 722ec60 2016-02-19 rehideved (sol@hiqdev.com)
    - d718fe3 2016-02-19 + create `tests/_bootstrap.php` file if it doesnt exist (sol@hiqdev.com)

## 0.3.0 2016-01-15

- Added proper color option by checking version
    - 3364abe 2016-01-15 + proper color option by checking version (sol@hiqdev.com)
- Fixed tests
    - 990d77d 2016-01-15 fixing tests (sol@hiqdev.com)
    - 16f3fd7 2016-01-15 fixed tests (sol@hiqdev.com)
- Added phpunit download link
    - 5f809fb 2016-01-15 + phpunit download link (sol@hiqdev.com)
- Changed: redone goals -> controllers
    - d1e3305 2016-01-14 change hidev-travis-ci -> hidev-travis (sol@hiqdev.com)
    - 0a8889a 2016-01-14 still fixing (sol@hiqdev.com)
    - d7e0670 2016-01-11 redoing goals to controllers (sol@hiqdev.com)
- Changed: redone with yii2-extraconfig
    - a840c18 2016-01-06 changed config structure (sol@hiqdev.com)
    - c43f9e2 2016-01-06 redoing with yii2-extraconfig (sol@hiqdev.com)
    - e8155d7 2016-01-02 php-cs-fixed (sol@hiqdev.com)

## 0.2.0 2015-12-23

- Added Travis `after_script` to upload coverage to Scrutinizer
    - 1ee87b5 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer (sol@hiqdev.com)
- Added `colors` config option
    - 3c2d32c 2015-12-23 fixed build (sol@hiqdev.com)
    - 89d02a8 2015-12-23 + colors config option (sol@hiqdev.com)

## 0.0.2 2015-11-26

- Added coverage reporting
    - 28f04bb 2015-11-26 disabled error reporting for notices (sol@hiqdev.com)
    - 095bc76 2015-11-26 added more tests (sol@hiqdev.com)
    - 81ecd38 2015-11-26 fixed `Phpunit::buildPath` (sol@hiqdev.com)
    - 4fe5881 2015-11-26 + coverage reporting (sol@hiqdev.com)
- Added `gentest` and `genfake` actions
    - a417690 2015-11-26 + `gentest` and `genfake` actions (sol@hiqdev.com)
- Added Travis CI integration
    - 629dd9a 2015-11-24 fixed tests (sol@hiqdev.com)
    - 0b19bc2 2015-11-24 + Travis CI badge (sol@hiqdev.com)

## 0.0.1 2015-11-24

- Added basics
    - de7adaa 2015-11-23 added exit code propagation and used smart `passthru` (sol@hiqdev.com)
    - e76f40b 2015-11-23 add minimal source for phpunit.xml.dist (sol@hiqdev.com)
    - f1b8fb0 2015-11-22 fixed namespace (sol@hiqdev.com)
    - 1b0e35b 2015-11-22 fixed namespace (sol@hiqdev.com)
    - ee6772f 2015-11-22 inited (sol@hiqdev.com)

## Development started 2015-11-22


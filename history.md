# hiqdev/hidev-phpunit

## [0.6.2] - 2017-05-18

- Fixed scrutinizer problem with removed phpunit 6 compatibility hack
    - [6ff7bbf] 2017-05-18 removed phpunit 6 compatibility [@hiqsol]

## [0.6.1] - 2017-05-10

- Renamed `File` <- ConfigFile
    - [5eea4ac] 2017-05-10 csfixed [@hiqsol]
    - [36644b1] 2017-05-08 renamed `File` <- ConfigFile [@hiqsol]

## [0.6.0] - 2017-05-03

- Redone to new hidev
    - [5dd2188] 2017-05-03 doc [@hiqsol]
    - [fe555d3] 2017-05-03 fixed tests [@hiqsol]
    - [75dc80e] 2017-05-03 csfixed [@hiqsol]
    - [0260bed] 2017-05-01 moved ConfigFile to `hidev\base` [@hiqsol]
    - [b002387] 2017-04-29 redoing for new hidev [@hiqsol]

## [0.5.0] - 2017-03-22

- Added PHPUnit 6 compatibility
    - [fd61fff] 2017-03-22 CHANGELOG updated [@SilverFire]
    - [1b1abbc] 2017-03-22 Marked compatibility classes as abstract [@SilverFire]
    - [61e6ccb] 2017-03-22 csfixed [@SilverFire]
    - [db4ba64] 2017-03-22 Added PHPUnit 6 compatibility [@SilverFire]

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [2fe5cd4] 2016-05-21 redoing to composer-config-plugin [@hiqsol]
    - [b18127b] 2016-05-21 redoing to composer-config-plugin [@hiqsol]
- Changed to use `@root` alias
    - [4d9dd0b] 2016-05-06 changed @prjdir -> @root [@hiqsol]
- Changed `tests/_bootstrap.php` template to look for `src/_bootstrap`
    - [0edcab2] 2016-04-29 changed `tests/_bootstrap.php` template to try to use `src/_bootstrap` [@hiqsol]

## [0.3.6] - 2016-04-22

- Added: enabled `phpunit-skelgen` downloading
    - [152416a] 2016-04-22 moved plugins requiring into composer.json [@hiqsol]
    - [8ed0463] 2016-04-22 + `phpunit-skelgen` downloading options [@hiqsol]

## [0.3.5] - 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - [8c25d5d] 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint [@hiqsol]
- Fixed `phpunit/gentest` to work when file given with extension
    - [c84d9c0] 2016-04-14 improved `phpunit/gentest` to work when file given with extension [@hiqsol]

## [0.3.4] - 2016-04-13

- Fixed build with asset-packagist
    - [111e1b0] 2016-04-13 added require Yii.php to `tests/_bootstrap.php` [@hiqsol]
    - [b2c5f08] 2016-04-13 fixed build with asset-packagist [@hiqsol]
- Changed to `hidev-config` <- `extension-config` (sol@hiqdev.com)
    - [1c2bc27] 2016-04-13 redone `extension-config` to `hidev-config` [@hiqsol]
- Fixed tests skeleton generation
    - [4bea574] 2016-04-13 fixed skelgen [@hiqsol]

## [0.3.3] - 2016-03-30

    - [c41a2a8] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [@hiqsol]

## [0.3.2] - 2016-02-19

- Fixed release - repeated release to GitHub
- Fixed package description
    - [47c4424] 2016-02-19 fixed package description [@hiqsol]

## [0.3.1] - 2016-02-19

- Added creating `tests/_bootstrap.php` if non existing
    - [722ec60] 2016-02-19 rehideved [@hiqsol]
    - [d718fe3] 2016-02-19 + create `tests/_bootstrap.php` file if it doesnt exist [@hiqsol]

## [0.3.0] - 2016-01-15

- Added proper color option by checking version
    - [3364abe] 2016-01-15 + proper color option by checking version [@hiqsol]
- Fixed tests
    - [990d77d] 2016-01-15 fixing tests [@hiqsol]
    - [16f3fd7] 2016-01-15 fixed tests [@hiqsol]
- Added phpunit download link
    - [5f809fb] 2016-01-15 + phpunit download link [@hiqsol]
- Changed: redone goals -> controllers
    - [d1e3305] 2016-01-14 change hidev-travis-ci -> hidev-travis [@hiqsol]
    - [0a8889a] 2016-01-14 still fixing [@hiqsol]
    - [d7e0670] 2016-01-11 redoing goals to controllers [@hiqsol]
- Changed: redone with yii2-extraconfig
    - [a840c18] 2016-01-06 changed config structure [@hiqsol]
    - [c43f9e2] 2016-01-06 redoing with yii2-extraconfig [@hiqsol]
    - [e8155d7] 2016-01-02 php-cs-fixed [@hiqsol]

## [0.2.0] - 2015-12-23

- Added Travis `after_script` to upload coverage to Scrutinizer
    - [1ee87b5] 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer [@hiqsol]
- Added `colors` config option
    - [3c2d32c] 2015-12-23 fixed build [@hiqsol]
    - [89d02a8] 2015-12-23 + colors config option [@hiqsol]

## [0.0.2] - 2015-11-26

- Added coverage reporting
    - [28f04bb] 2015-11-26 disabled error reporting for notices [@hiqsol]
    - [095bc76] 2015-11-26 added more tests [@hiqsol]
    - [81ecd38] 2015-11-26 fixed `Phpunit::buildPath` [@hiqsol]
    - [4fe5881] 2015-11-26 + coverage reporting [@hiqsol]
- Added `gentest` and `genfake` actions
    - [a417690] 2015-11-26 + `gentest` and `genfake` actions [@hiqsol]
- Added Travis CI integration
    - [629dd9a] 2015-11-24 fixed tests [@hiqsol]
    - [0b19bc2] 2015-11-24 + Travis CI badge [@hiqsol]

## [0.0.1] - 2015-11-24

- Added basics
    - [de7adaa] 2015-11-23 added exit code propagation and used smart `passthru` [@hiqsol]
    - [e76f40b] 2015-11-23 add minimal source for phpunit.xml.dist [@hiqsol]
    - [f1b8fb0] 2015-11-22 fixed namespace [@hiqsol]
    - [1b0e35b] 2015-11-22 fixed namespace [@hiqsol]
    - [ee6772f] 2015-11-22 inited [@hiqsol]
## Development started 2015-11-22

## [Development started] - 2015-11-22

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[2fe5cd4]: https://github.com/hiqdev/hidev-phpunit/commit/2fe5cd4
[b18127b]: https://github.com/hiqdev/hidev-phpunit/commit/b18127b
[4d9dd0b]: https://github.com/hiqdev/hidev-phpunit/commit/4d9dd0b
[0edcab2]: https://github.com/hiqdev/hidev-phpunit/commit/0edcab2
[152416a]: https://github.com/hiqdev/hidev-phpunit/commit/152416a
[8ed0463]: https://github.com/hiqdev/hidev-phpunit/commit/8ed0463
[8c25d5d]: https://github.com/hiqdev/hidev-phpunit/commit/8c25d5d
[c84d9c0]: https://github.com/hiqdev/hidev-phpunit/commit/c84d9c0
[111e1b0]: https://github.com/hiqdev/hidev-phpunit/commit/111e1b0
[b2c5f08]: https://github.com/hiqdev/hidev-phpunit/commit/b2c5f08
[1c2bc27]: https://github.com/hiqdev/hidev-phpunit/commit/1c2bc27
[4bea574]: https://github.com/hiqdev/hidev-phpunit/commit/4bea574
[c41a2a8]: https://github.com/hiqdev/hidev-phpunit/commit/c41a2a8
[47c4424]: https://github.com/hiqdev/hidev-phpunit/commit/47c4424
[722ec60]: https://github.com/hiqdev/hidev-phpunit/commit/722ec60
[d718fe3]: https://github.com/hiqdev/hidev-phpunit/commit/d718fe3
[3364abe]: https://github.com/hiqdev/hidev-phpunit/commit/3364abe
[990d77d]: https://github.com/hiqdev/hidev-phpunit/commit/990d77d
[16f3fd7]: https://github.com/hiqdev/hidev-phpunit/commit/16f3fd7
[5f809fb]: https://github.com/hiqdev/hidev-phpunit/commit/5f809fb
[d1e3305]: https://github.com/hiqdev/hidev-phpunit/commit/d1e3305
[0a8889a]: https://github.com/hiqdev/hidev-phpunit/commit/0a8889a
[d7e0670]: https://github.com/hiqdev/hidev-phpunit/commit/d7e0670
[a840c18]: https://github.com/hiqdev/hidev-phpunit/commit/a840c18
[c43f9e2]: https://github.com/hiqdev/hidev-phpunit/commit/c43f9e2
[e8155d7]: https://github.com/hiqdev/hidev-phpunit/commit/e8155d7
[1ee87b5]: https://github.com/hiqdev/hidev-phpunit/commit/1ee87b5
[3c2d32c]: https://github.com/hiqdev/hidev-phpunit/commit/3c2d32c
[89d02a8]: https://github.com/hiqdev/hidev-phpunit/commit/89d02a8
[28f04bb]: https://github.com/hiqdev/hidev-phpunit/commit/28f04bb
[095bc76]: https://github.com/hiqdev/hidev-phpunit/commit/095bc76
[81ecd38]: https://github.com/hiqdev/hidev-phpunit/commit/81ecd38
[4fe5881]: https://github.com/hiqdev/hidev-phpunit/commit/4fe5881
[a417690]: https://github.com/hiqdev/hidev-phpunit/commit/a417690
[629dd9a]: https://github.com/hiqdev/hidev-phpunit/commit/629dd9a
[0b19bc2]: https://github.com/hiqdev/hidev-phpunit/commit/0b19bc2
[de7adaa]: https://github.com/hiqdev/hidev-phpunit/commit/de7adaa
[e76f40b]: https://github.com/hiqdev/hidev-phpunit/commit/e76f40b
[f1b8fb0]: https://github.com/hiqdev/hidev-phpunit/commit/f1b8fb0
[1b0e35b]: https://github.com/hiqdev/hidev-phpunit/commit/1b0e35b
[ee6772f]: https://github.com/hiqdev/hidev-phpunit/commit/ee6772f
[1b1abbc]: https://github.com/hiqdev/hidev-phpunit/commit/1b1abbc
[61e6ccb]: https://github.com/hiqdev/hidev-phpunit/commit/61e6ccb
[db4ba64]: https://github.com/hiqdev/hidev-phpunit/commit/db4ba64
[Under development]: https://github.com/hiqdev/hidev-phpunit/compare/0.6.1...HEAD
[0.4.0]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.6...0.4.0
[0.3.6]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.5...0.3.6
[0.3.5]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.4...0.3.5
[0.3.4]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.3...0.3.4
[0.3.3]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.2...0.3.3
[0.3.2]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.1...0.3.2
[0.3.1]: https://github.com/hiqdev/hidev-phpunit/compare/0.3.0...0.3.1
[0.3.0]: https://github.com/hiqdev/hidev-phpunit/compare/0.2.0...0.3.0
[0.2.0]: https://github.com/hiqdev/hidev-phpunit/compare/0.0.2...0.2.0
[0.0.2]: https://github.com/hiqdev/hidev-phpunit/compare/0.0.1...0.0.2
[0.0.1]: https://github.com/hiqdev/hidev-phpunit/releases/tag/0.0.1
[fd61fff]: https://github.com/hiqdev/hidev-phpunit/commit/fd61fff
[0.5.0]: https://github.com/hiqdev/hidev-phpunit/compare/0.4.0...0.5.0
[fe555d3]: https://github.com/hiqdev/hidev-phpunit/commit/fe555d3
[75dc80e]: https://github.com/hiqdev/hidev-phpunit/commit/75dc80e
[0260bed]: https://github.com/hiqdev/hidev-phpunit/commit/0260bed
[b002387]: https://github.com/hiqdev/hidev-phpunit/commit/b002387
[5dd2188]: https://github.com/hiqdev/hidev-phpunit/commit/5dd2188
[0.6.0]: https://github.com/hiqdev/hidev-phpunit/compare/0.5.0...0.6.0
[5eea4ac]: https://github.com/hiqdev/hidev-phpunit/commit/5eea4ac
[36644b1]: https://github.com/hiqdev/hidev-phpunit/commit/36644b1
[0.6.1]: https://github.com/hiqdev/hidev-phpunit/compare/0.6.0...0.6.1
[6ff7bbf]: https://github.com/hiqdev/hidev-phpunit/commit/6ff7bbf
[0.6.2]: https://github.com/hiqdev/hidev-phpunit/compare/0.6.1...0.6.2

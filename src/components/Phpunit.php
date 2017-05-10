<?php
/**
 * HiDev plugin for PHPUnit.
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\components;

use hidev\base\File;
use Yii;

/**
 * PHPunit.
 */
class Phpunit extends \hidev\base\Component
{
    protected $_version;

    protected $_bootstrapFile;

    public $colors;
    public $coverageText;
    public $coverageClover;

    public function touchBootstrap()
    {
        if (!$this->getBootstrapFile()->exists()) {
            $this->getBootstrapFile()->save();
        }
    }

    public function getBootstrapFile()
    {
        if ($this->_bootstrapFile === null) {
            $this->_bootstrapFile = Yii::createObject([
                'class'     => File::class,
                'template'  => 'phpunit/bootstrap.twig',
                'path'      => 'tests/_bootstrap.php',
            ]);
        }

        return $this->_bootstrapFile;
    }

    public function prepareArgs($args = [])
    {
        if ($this->coverageText) {
            $args[] = '--coverage-text';
        }
        if ($this->coverageClover) {
            $args[] = '--coverage-clover=' . (is_string($this->coverageClover) ? $this->coverageClover : 'coverage.clover');
        }
        if ($this->colors) {
            $args[] = '--colors' . (version_compare($this->getVersion(), '4.7.0', '>=') ? '=' . $this->colors : '');
        }

        return $args;
    }

    public function getVersion()
    {
        if ($this->_version === null) {
            $this->_version = $this->detectVersion();
        }

        return $this->_version;
    }

    public function detectVersion()
    {
        $lines = $this->exec('phpunit', ['--version']);

        return explode(' ', $lines[0], 3)[1];
    }
}

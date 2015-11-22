<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\goals;

/**
 * Goal for Phpunit.
 */
class PhpunitGoal extends \hidev\goals\DefaultGoal
{
    public $configFile = 'phpunit.xml.dist';

    public function init()
    {
        $this->setDeps($this->configFile);
    }

    public function actionMake()
    {
        $this->actionRun();
    }

    protected $_bin;

    public function getBin()
    {
        if ($this->_bin === null) {
            $this->_bin = $this->detectBin();
        }
        return $this->_bin;
    }

    public function setBin($path)
    {
        $this->_bin = $path;
    }

    public function detectBin()
    {
        if ($this->package->hasRequireAny('phpunit/phpunit')) {
            return './vendor/bin/phpunit';
        }

        return '$HOME/.composer/vendor/bin/phpunit';
    }

    public function actionRun()
    {
        passthru($this->getBin());
    }
}

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
        return $this->actionRun();
    }

    public function actionRun()
    {
        return $this->passthru('phpunit');
    }
}

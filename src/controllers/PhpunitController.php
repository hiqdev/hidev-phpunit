<?php

/*
 * PHPUnit plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-phpunit
 * @package   hidev-phpunit
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpunit\controllers;

use hidev\handlers\BaseHandler;
use Yii;

/**
 * Goal for Phpunit.
 */
class PhpunitController extends \hidev\controllers\CommonController
{
    protected $_before = ['phpunit.xml.dist'];

    protected $_version;

    public $force;
    public $colors;
    public $coverageText;
    public $coverageClover;

    public function getConfiguration()
    {
        return $this->getGoal('phpunit.xml.dist');
    }

    public function actionMake()
    {
        return $this->actionRun();
    }

    public function actionRun()
    {
        $args = [];
        if ($this->coverageText) {
            $args[] = '--coverage-text';
        }
        if ($this->coverageClover) {
            $args[] = '--coverage-clover=' . (is_string($this->coverageClover) ? $this->coverageClover : 'coverage.clover');
        }
        if ($this->colors) {
            $args[] = '--colors' . (version_compare($this->getVersion(),'4.7.0', '>=') ? '=' . $this->colors : '');
        }

        return $this->passthru('phpunit', $args);
    }

    public function getVersion()
    {
        if ($this->_version === null) {
            $lines = $this->exec('phpunit', ['--version']);
            $a = explode(' ', $lines[0], 3)[1];
            $this->_version = $a;
        }

        return $this->_version;
    }

    public function actionGenfake($file)
    {
        $path = $this->buildFakePath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }

        return $this->genFake($file, $path);
    }

    public function genFake($file, $path)
    {
        $text = $this->getView()->render('phpunit/fake.twig', [
            'class'         => $this->buildClass($file),
            'namespace'     => $this->buildTestNamespace(),
            'name'          => $file,
        ]);
        BaseHandler::write($path, $text);
    }

    public function actionGentest($file)
    {
        $path = $this->buildTestPath($file);
        if (!$this->force && file_exists($path)) {
            Yii::warning("already exists: $path");
            return 1;
        }

        return $this->genSkel($file);
    }

    public function genSkel($file)
    {
        return $this->passthru('phpunit-skelgen', [
            'generate-test', '--bootstrap', 'tests/_bootstrap.php', '--',
            $this->buildClass($file), $this->buildPath($file), $this->buildTestClass($file), $this->buildTestPath($file),
        ]);
    }

    public function buildNamespace($dir = '')
    {
        return $this->package->namespace . ($dir ? '\\' . strtr($dir, '/', '\\') : '');
    }

    public function buildTestNamespace($dir = 'tests\\unit')
    {
        return $this->buildNamespace($dir);
    }

    public function buildClass($file, $dir = '')
    {
        return $this->buildNamespace($dir) . '\\' . strtr($file, '/', '\\');
    }

    public function buildTestClass($file, $dir = 'tests\\unit')
    {
        return $this->buildClass($file, $dir);
    }

    public function buildPath($file, $dir = 'src', $prefix = '', $postfix = '')
    {
        return $dir . DIRECTORY_SEPARATOR . $prefix . $file . $postfix . '.php';
    }

    public function buildTestPath($file, $dir = 'tests/unit', $prefix = '', $postfix = 'Test')
    {
        return $this->buildPath($file, $dir, $prefix, $postfix);
    }

    public function buildFakePath($file, $dir = 'tests/unit', $prefix = 'Fake', $postfix = '')
    {
        return $this->buildPath($file, $dir, $prefix, $postfix);
    }
}

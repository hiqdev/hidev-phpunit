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

use hidev\base\File;
use hidev\handlers\BaseHandler;
use Yii;

/**
 * Goal for Phpunit.
 */
class PhpunitController extends \hidev\controllers\CommonController
{
    protected $_before = ['phpunit/bootstrap', 'phpunit.xml.dist'];

    protected $_version;

    protected $_bootstrapFile;

    public $force;
    public $colors;
    public $coverageText;
    public $coverageClover;

    public function getConfiguration()
    {
        return $this->getGoal('phpunit.xml.dist');
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

    public function actionBootstrap()
    {
        if (!$this->getBootstrapFile()->exists()) {
            $this->getBootstrapFile()->save();
        }
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
            $args[] = '--colors' . (version_compare($this->getVersion(), '4.7.0', '>=') ? '=' . $this->colors : '');
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

    public static function prepareFile($file)
    {
        return substr($file, -4) === '.php' ? substr($file, 0, -4) : $file;
    }

    public function genSkel($file)
    {
        $destPath = $this->buildTestPath($file);
        $dir = dirname($destPath);
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        return $this->passthru('phpunit-skelgen', [
            'generate-test', '--bootstrap', 'tests/_bootstrap.php', '--',
            $this->buildClass($file), $this->buildPath($file), $this->buildTestClass($file), $destPath,
        ]);
    }

    public function buildNamespace($dir = '')
    {
        return $this->takePackage()->namespace . ($dir ? '\\' . strtr($dir, '/', '\\') : '');
    }

    public function buildTestNamespace($dir = 'tests\\unit')
    {
        return $this->buildNamespace($dir);
    }

    public function buildClass($file, $dir = '', $postfix = '')
    {
        return $this->buildNamespace($dir) . '\\' . strtr(static::prepareFile($file), '/', '\\') . $postfix;
    }

    public function buildTestClass($file, $dir = 'tests\\unit', $postfix = 'Test')
    {
        return $this->buildClass($file, $dir, $postfix);
    }

    public function buildPath($file, $dir = 'src', $prefix = '', $postfix = '')
    {
        return $dir . DIRECTORY_SEPARATOR . $prefix . static::prepareFile($file) . $postfix . '.php';

        ### XXX getting absolute path, think if needed
        #return strncmp($path, '/', 1) === 0 ? $path : Yii::getAlias("@root/$path");
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

<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */
if (!defined('WEBAPP_ROOT_DIR')) {
    fwrite(STDERR, 'WEBAPP_ROOT_DIR constant must be defined');
    exit(1);
}

if (!defined('WEBAPP_VENDOR_DIR')) {
    foreach ([WEBAPP_ROOT_DIR . '/vendor'] as $dir) {
        if (file_exists($dir . '/autoload.php')) {
            define('WEBAPP_VENDOR_DIR', $dir);
            break;
        }
    }
}

if (!defined('WEBAPP_VENDOR_DIR') || !file_exists(WEBAPP_VENDOR_DIR . '/autoload.php')) {
    fwrite(STDERR, "Run composer to set up dependencies!\n");
    exit(1);
}

require_once WEBAPP_VENDOR_DIR . '/autoload.php';
require_once Yiisoft\Composer\Config\Builder::path('defines');
require_once WEBAPP_VENDOR_DIR . '/yiisoft/yii2/Yii.php';

Yii::setAlias('@root', WEBAPP_ROOT_DIR);
Yii::setAlias('@vendor', WEBAPP_VENDOR_DIR);

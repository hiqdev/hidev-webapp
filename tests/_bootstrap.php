<?php
/**
 * HiDev plugin for Yii2 web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2018, HiQDev (http://hiqdev.com/)
 */
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('UTC');

$ROOT_DIR = dirname(__DIR__, 4) . '/runtime';
$VENDOR_DIR = dirname(__DIR__, 3);

require_once $VENDOR_DIR . '/autoload.php';
require_once $VENDOR_DIR . '/yiisoft/yii2/Yii.php';

$config = require $VENDOR_DIR . '/yiisoft/composer-config-plugin-output/web.php';

Yii::setAlias('@root', $ROOT_DIR);
Yii::setAlias('@vendor', $VENDOR_DIR);
Yii::setAlias('@runtime', $ROOT_DIR . '/runtime');

Yii::$app = new \yii\web\Application($config);

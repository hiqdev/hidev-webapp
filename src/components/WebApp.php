<?php
/**
 * HiDev plugin for Yii2 web applications.
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\components;

use Yii;

/**
 * WebApp component.
 */
class WebApp extends \hidev\base\Directory
{
    protected $_nginx;
    protected $_vhost;

    public function getNginx()
    {
        if ($this->_nginx === null) {
            $this->_nginx = $this->take('nginx');
        }

        return $this->_nginx;
    }

    public function getVhost()
    {
        if ($this->_vhost === null) {
            $this->_vhost = $this->getNginx()->get('default');
        }

        return $this->_vhost;
    }

    public function setVhost(array $params)
    {
        Yii::configure($this->getVhost(), $params);
    }
}

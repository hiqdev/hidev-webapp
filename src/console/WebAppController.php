<?php
/**
 * HiDev plugin for web applications
 *
 * @link      https://github.com/hiqdev/hidev-webapp
 * @package   hidev-webapp
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hidev\webapp\console;

/**
 * Goal for WebApp.
 */
class WebAppController extends \hidev\controllers\DirectoryController
{
    protected $_env;
    protected $_debug;
    protected $_defines = [];
    protected $_nginx;
    protected $_vhost;

    public function setEnv($value)
    {
        $this->_env = $value;
    }

    public function getEnv()
    {
        if ($this->_env === null) {
            $this->_env = 'prod';
        }

        return $this->_env;
    }

    public function setDebug($value)
    {
        $this->_debug = $value;
    }

    public function getDebug()
    {
        if ($this->_debug === null) {
            $this->_debug = ($this->getEnv() === 'dev');
        }

        return $this->_debug;
    }

    public function setDefines(array $hash)
    {
        $defaults = [
            'YII_ENV'   => $this->getEnv(),
            'YII_DEBUG' => $this->getDebug(),
        ];
        $this->_defines = array_merge($this->_defines, $defaults, $hash);
    }

    public function getDefines()
    {
        if (empty($this->_defines)) {
            $this->setDefines([]);
        }

        return $this->_defines;
    }

    public function getNginx()
    {
        if ($this->_nginx === null) {
            $this->_nginx = $this->takeGoal('nginx');
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
        foreach ($params as $key => $value) {
            $this->getVhost()->{$key} = $value;
        }
    }
}

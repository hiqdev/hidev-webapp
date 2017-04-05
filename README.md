# HiDev WebApp

**HiDev plugin for web applications**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-webapp/v/stable)](https://packagist.org/packages/hiqdev/hidev-webapp)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-webapp/downloads)](https://packagist.org/packages/hiqdev/hidev-webapp)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-webapp.svg)](https://travis-ci.org/hiqdev/hidev-webapp)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hidev-webapp.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-webapp/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hidev-webapp.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-webapp/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hidev-webapp/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hidev-webapp/dev-master)

[HiDev](https://github.com/hiqdev/hidev) is a task runner, code generator and build tool for easier continuos integration.

This plugin provides HiDev configuration to automate standard tasks for web applications:

- creates directory structure and files:
    - `runtime/`
    - `web/assets/`
    - `web/index.php`
    - `web/robots.txt`
    - `web/favicon.ico`
    - `src/config/bootstrap.php`
    - `src/config/defines.php`
    - `src/config/params.php`
- sets proper permissions for directories and files
- nginx config generation with help of `hidev-nginx` plugin
- TODO: docker config generation

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hidev-webapp"
```

or add

```json
"hiqdev/hidev-webapp": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2017, HiQDev (http://hiqdev.com/)

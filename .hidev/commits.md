hiqdev/hidev-hisite commits history
-----------------------------------

## 0.4.1 2016-05-24

- Changed: redone to `composer-config-plugin`
    - 296acb3 2016-05-24 redone to composer-config-plugin (sol@hiqdev.com)

## 0.4.0 2016-05-14

- Added functional tests
    - 0ddb605 2016-05-14 added more php-cs-fixer skip pathes (sol@hiqdev.com)
    - 82c41af 2016-05-14 csfixed (sol@hiqdev.com)
    - 4e91329 2016-05-13 added functional tests (sol@hiqdev.com)
    - e522f30 2016-05-13 fixed dependencies (sol@hiqdev.com)
    - b7a2e04 2016-05-13 fixing dependencies constraints (sol@hiqdev.com)
    - f69b54f 2016-05-13 fixing dependencies constraints (sol@hiqdev.com)
    - 8d1bd1b 2016-05-13 fixing dependencies (sol@hiqdev.com)
- Added better nginx goal integration
    - c5ef149 2016-05-12 + nginx vhost manipulation to HiSiteController (sol@hiqdev.com)
- Changed: moved templates to `hisite` subdir
    - 9947c9f 2016-05-12 moved templates to `hisite` subdir (sol@hiqdev.com)
- Changed: rearranged configs and templates for new configs scheme: bootstrap, defines, params, hidev, hisite, web
    - 399d007 2016-05-13 changed defines generation, added DefinesController instead of ParamsController (sol@hiqdev.com)
    - d2553bd 2016-05-12 + env defaulting in HiSiteController (sol@hiqdev.com)
    - b4266f7 2016-05-12 improved ParamsController to generate by template initially (sol@hiqdev.com)
    - ce5e9a5 2016-05-12 moved vcsignore to src/config/hidev.php (sol@hiqdev.com)
    - 5579d4c 2016-05-11 added `YII_ENV/DEBUG` substitution to params (sol@hiqdev.com)
    - f2ba45d 2016-05-10 fixed bootstrap path (sol@hiqdev.com)
    - 1309448 2016-05-10 still rearranging configs (sol@hiqdev.com)
    - eb57b00 2016-05-10 rearranged configs to new scheme (sol@hiqdev.com)
    - def4a32 2016-05-07 splitted out nginx functionality into `hidev-nginx` (sol@hiqdev.com)
    - 380f115 2016-05-03 changed to local hidev plugins (sol@hiqdev.com)
    - 7dc6c6e 2016-05-03 fixed HiSiteController to inherit from DirectoryController (sol@hiqdev.com)
    - f222ab7 2016-05-02 simplified `web/index.php` template (sol@hiqdev.com)
    - f86ab4f 2016-05-02 minor fix (sol@hiqdev.com)
    - e23d9d9 2016-05-02 + more aliases at bootstrap template: @root, @hisite, @vendor (sol@hiqdev.com)
- Changed with new `hiqdev/composer-extension-plugin`
    - f31824b 2016-04-15 still playing with `hiqdev/composer-extension-plugin` version (sol@hiqdev.com)
    - 8a5a80f 2016-04-15 playing with `hiqdev/composer-extension-plugin` version (sol@hiqdev.com)
    - 5227550 2016-04-15 removed require `vendor/hiqdev/common-config.php` at web/index (sol@hiqdev.com)
    - 250df95 2016-04-15 + require `vendor/hiqdev/common-config.php` at web/index (sol@hiqdev.com)
    - 52c3403 2016-04-15 + set main alias at bootstrap (sol@hiqdev.com)
    - 7fb1d38 2016-04-15 dont rewrite `src/_bootstrap.php` (sol@hiqdev.com)
    - 01e8861 2016-04-14 added templates for common, console and web config files (sol@hiqdev.com)
    - a749ef4 2016-04-14 added `_bootstrap.php` templating, splited config info common, web, console (sol@hiqdev.com)
    - 1f98d71 2016-04-02 + params to config/main (sol@hiqdev.com)
    - e245a4f 2016-04-15 added `hisite-config.php` (sol@hiqdev.com)
    - fb32dee 2016-04-14 redone to `hidev-hisite` (sol@hiqdev.com)
    - fed75fa 2016-04-02 changed `extensions-config` <- `yii2-extraconfig` (sol@hiqdev.com)
    - 285eb0d 2016-04-01 changed `extension-config` <- `yii2-extraconfig` (sol@hiqdev.com)
- Added initial tests and fixed build
    - 964a8d8 2016-04-14 + require `hiqdev/composer-extension-plugin` (sol@hiqdev.com)
    - a30fa0a 2016-04-14 phpcsfixed (sol@hiqdev.com)
    - 83ea2ef 2016-04-14 fixed build with asset-packagist (sol@hiqdev.com)
    - 87c1074 2016-04-14 inited tests (sol@hiqdev.com)

## 0.0.1 2016-03-22

- Added basics
    - 0b543bd 2016-03-22 + nginx config generation (sol@hiqdev.com)
    - 4aad7ea 2016-03-21 radically simplified config building (sol@hiqdev.com)
    - 4af5901 2016-02-23 + nginx config generation (sol@hiqdev.com)
    - 3630906 2016-02-23 + getters for domain, prjdir, webdir, logdir, ip variables (sol@hiqdev.com)
    - d91bc10 2016-02-23 + `@vendor` alias (sol@hiqdev.com)
    - 9a0dbb5 2016-02-23 looks working (sol@hiqdev.com)
    - e14faad 2016-02-22 fixed composer name (sol@hiqdev.com)
    - 2bbea43 2016-02-22 php-cs-fixed (sol@hiqdev.com)
    - 3f42ad5 2016-02-22 inited (sol@hiqdev.com)

## Development started 2016-02-22


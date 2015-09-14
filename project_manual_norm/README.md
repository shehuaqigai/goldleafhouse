项目架构
========
基于yii2.0
composer管理依赖

安装框架
===========
composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-advanced 应用名



安装 Composer asset plugin
==========================
它是通过 Composer 管理 bower 和 npm 包所必须的，此命令全局生效，一劳永逸
composer global require "fxp/composer-asset-plugin:~1.0.0"



初始化应用(要开启openssl模块,php>=5.4)
==============================
php init

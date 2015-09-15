<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi,
                initial-scale=1, user-scalable=0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="renderer" content="webkit">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <?= Html::csrfMetaTags() ?>
    <link rel="shortcut icon" href="<?=Url::to('@web/')?>favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?=Url::to('@web/')?>favicon.png" type="image/x-icon"/>
    <title><?= Html::encode($this->title) ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
        <nav id="w0" class="navbar-default navbar-fixed-top navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <i class="glyphicon glyphicon-leaf navbar-brand"></i>
                    <a class="navbar-brand" href="<?=Url::home();?>">金叶家园</a>
                </div>
                <div id="w0-collapse" class="collapse navbar-collapse">
                    <ul id="w1" class="navbar-nav navbar-right nav">
                        <li class="site-index">
                            <a href="<?=Url::toRoute(['site/index']);?>">
                                <i class="glyphicon glyphicon-home"></i>
                                主页
                            </a>
                        </li>
                        <!--关于包括更新日志，社区动力，开发团队介绍，联系我们，贡献支持-->
                        <li class="about">
                            <a href="<?=Url::toRoute(['about/about']);?>">
                                <i class="glyphicon glyphicon-certificate"></i>
                                关于
                            </a>
                        </li>
                        <!--商圈包括购物，活动介绍，家政服务-->
                        <li class="server">
                            <a href="<?=Url::toRoute(['server/trade-server']);?>">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                服务
                            </a>
                        </li>
                        <!--金叶社区包括，新闻资讯,子女交流,分享,社交,论坛-->
                        <li class="community">
                            <a href="<?=Url::toRoute(['community/community']);?>">
                                <i class="glyphicon glyphicon-grain"></i>
                                社区
                            </a>
                        </li>
                        <!--金叶社区包括，新闻资讯,子女交流,分享,社交,论坛-->
                        <li class="event">
                            <a href="<?=Url::toRoute(['event/event']);?>">
                                <i class="glyphicon glyphicon-glass"></i>
                                活动
                            </a>
                        </li>
                        <li class="site-notice">
                            <a href="<?=Url::toRoute(['site/notice']);?>">
                                <i class="glyphicon glyphicon-bullhorn"></i>
                                公告
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        </div>
    <div class="container">
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 金叶家园社区 <?= date('Y') ?></p>

        <p class="pull-right">
            <?= Html::a('技术支持', ['#']) ?>
        </p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

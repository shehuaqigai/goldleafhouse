<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '通知公告';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::cssFile('@web/css/site-notice.css') ?>
<div class="site-notice">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<?= Html::jsFile('@web/js/site-notice.js') ?>

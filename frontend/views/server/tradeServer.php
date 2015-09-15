<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '商圈服务';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::cssFile('@web/css/trade-server.css') ?>
<div class="trade-server">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<?= Html::jsFile('@web/js/trade-server.js') ?>

<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '组织活动';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::cssFile('@web/css/event.css') ?>
<div class="event">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<?= Html::jsFile('@web/js/event.js') ?>

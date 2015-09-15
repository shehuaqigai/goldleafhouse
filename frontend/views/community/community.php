<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Community';
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::cssFile('@web/css/community.css') ?>
<div class="community">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
<?= Html::jsFile('@web/js/community.js') ?>

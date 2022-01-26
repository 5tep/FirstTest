<?php
use yii\helpers\Html;
$this->title = 'Say something..';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = $message;
?>
<?= Html::encode($message) ?>

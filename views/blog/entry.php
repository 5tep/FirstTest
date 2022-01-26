<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->hint('Ваше имя') ?>

    <?= $form->field($model, 'email')->hint('Ваш електронный адрес') ?>

    <?= $form->field($model, 'sex')->label('Муж\Жен') ?>
    
<div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

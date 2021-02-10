<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\admin\printer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="printer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_printer')->textInput() ?>

    <?= $form->field($model, 'printer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serv_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

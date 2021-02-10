<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\admin\compatbl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compatbl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'model_cart')->textInput() ?>

    <?= $form->field($model, 'model_printer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

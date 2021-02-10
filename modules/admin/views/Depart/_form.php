<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\admin\Depart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="depart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_name_depart')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

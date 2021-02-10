<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\admin\Cartrige;

/* @var $this yii\web\View */
/* @var $model app\models\admin\storage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="storage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')
    ->dropDownList(ArrayHelper::map(Cartrige::find()->all(), 'id', 'name')
    )
    ?>
    
    <?= $form->field($model, 'count')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

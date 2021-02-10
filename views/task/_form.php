<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\admin\Cartrige;
/* @var $this yii\web\View */
/* @var $model app\models\task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'id_name')
    ->dropDownList(ArrayHelper::map(Cartrige::find()->all(), 'id', 'name')
    )
    ?> 


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

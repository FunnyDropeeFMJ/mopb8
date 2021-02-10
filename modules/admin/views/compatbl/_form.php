<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\admin\Cartrige;
use app\models\admin\Printer;
/* @var $this yii\web\View */
/* @var $model app\models\admin\compatbl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compatbl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'model_cart')
    ->dropDownList(ArrayHelper::map(Cartrige::find()->all(), 'id', 'name')
    )
    ?>

<?= $form->field($model, 'model_printer')
    ->dropDownList(ArrayHelper::map(Printer::find()->all(), 'id_printer', 'printer_name')
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

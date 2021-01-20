<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Userbind;
use app\models\User;
use app\models\Depart;
/* @var $this yii\web\View */
/* @var $model app\models\userbind */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userbind-form">



    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_depart')
    ->dropDownList(ArrayHelper::map(Depart::find()->all(), 'id', 'id_name_depart')
    )
    ?>

<?= $form->field($model, 'user_name')
    ->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'name')
    )
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

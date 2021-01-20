<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\userbind */

$this->title = 'Update Userbind: ' . $model->id_userbind;
$this->params['breadcrumbs'][] = ['label' => 'Userbinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_userbind, 'url' => ['view', 'id' => $model->id_userbind]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userbind-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

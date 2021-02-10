<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\admin\compatbl */

$this->title = 'Совместить картридж с принтером';
$this->params['breadcrumbs'][] = ['label' => 'Совместимость', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compatbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

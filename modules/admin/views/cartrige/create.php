<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\admin\Cartrige */

$this->title = 'Добавить картридж';
$this->params['breadcrumbs'][] = ['label' => 'Картридж', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cartrige-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\admin\printer */

$this->title = 'Добавить принтер';
$this->params['breadcrumbs'][] = ['label' => 'Принтер', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="printer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

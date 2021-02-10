<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\task */

$this->title = 'Создать запрос';
$this->params['breadcrumbs'][] = ['label' => 'Запрос', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

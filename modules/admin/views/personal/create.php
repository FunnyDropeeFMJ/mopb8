<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\admin\Personal */

$this->title = 'Добавить сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Персонал', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

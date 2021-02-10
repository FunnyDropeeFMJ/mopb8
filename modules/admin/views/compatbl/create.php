<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\admin\compatbl */

$this->title = 'Create Compatbl';
$this->params['breadcrumbs'][] = ['label' => 'Compatbls', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compatbl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

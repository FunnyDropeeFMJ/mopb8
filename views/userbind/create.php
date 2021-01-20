<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\userbind */

$this->title = 'Create Userbind';
$this->params['breadcrumbs'][] = ['label' => 'Userbinds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userbind-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

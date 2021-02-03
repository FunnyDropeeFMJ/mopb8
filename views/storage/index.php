<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\StorageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Storages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="storage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Storage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name',
            'count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

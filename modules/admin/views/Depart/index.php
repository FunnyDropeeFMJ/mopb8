<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\controllers\DepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="depart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Depart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_name_depart',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

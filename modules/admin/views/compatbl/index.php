<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\controllers\CompatblSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Совместимость';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compatbl-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Совместить картридж с принтером', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'model_cart',
            'model_printer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

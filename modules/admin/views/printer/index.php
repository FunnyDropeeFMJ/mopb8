<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\controllers\PrinterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Принтеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="printer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить принтер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'printer_name',
            'serv_number',
            'inventory_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

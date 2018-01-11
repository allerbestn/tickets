<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Панель адміністратора';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="admin-index">

    <h1>Редагування даних</h1>
    <p>
        <?= Html::a('Додати новий маршрут', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'station_from',
            'station_till',
            'date_dep',
            'time_dep',
            'cars_count',
            'free_places',
            'arrival_date',
            'arrival_time',
            'train_number',

            [
                'class' => '\yii\grid\ActionColumn',
            ]
        ],
    ]); ?>

</div>
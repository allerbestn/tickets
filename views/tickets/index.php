<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Доступні рейси';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="routes-index">

    <h1>Доступні рейси</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
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
                //'template' => '<a href="http://tickets.local/web/index.php?r=tickets/order">Замовити</a>'
                'template' => '{order}{update}'
            ],

        ],
    ]); ?>
</div>

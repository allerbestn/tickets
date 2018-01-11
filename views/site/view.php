<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Routes */

$this->title = $model->station_from ." - " . $model->station_till;
$this->params['breadcrumbs'][] = ['label' => 'Маршрути', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Змінити', ['update', 'id' => $model->id_route], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Видалити', ['delete', 'id' => $model->id_route], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'station_from',
            'station_till',
            'date_dep',
            'time_dep',
            'cars_count',
            'free_places',
            'arrival_date',
            'arrival_time',
            'train_number',
        ],
    ]) ?>

</div>

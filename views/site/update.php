<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Routes */

$this->title = 'Редагувати маршрут: ' . $model->station_from ." - " . $model->station_till;
$this->params['breadcrumbs'][] = ['label' => 'Маршрути', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->station_from ." - " . $model->station_till , 'url' => ['view', 'id' => $model->id_route]];
$this->params['breadcrumbs'][] = 'Редагування';
?>
<div class="routes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

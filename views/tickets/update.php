<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Routes */

$this->title = 'Update Routes: ' . $model->id_route;
$this->params['breadcrumbs'][] = ['label' => 'Routes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_route, 'url' => ['view', 'id' => $model->id_route]];
$this->params['breadcrumbs'][] = 'Замовлення';
?>
<div class="routes-update">

    <h1>Ваше замовлення</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Routes */

$this->title = 'Додати новий маршрут';
$this->params['breadcrumbs'][] = ['label' => 'Маршрути', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

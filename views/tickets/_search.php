<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RoutesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_route') ?>

    <?= $form->field($model, 'station_from') ?>

    <?= $form->field($model, 'station_till') ?>

    <?= $form->field($model, 'date_dep') ?>

    <?= $form->field($model, 'time_dep') ?>

    <?php // echo $form->field($model, 'cars_count') ?>

    <?php // echo $form->field($model, 'free_places') ?>

    <?php // echo $form->field($model, 'arrival_date') ?>

    <?php // echo $form->field($model, 'arrival_time') ?>

    <?php // echo $form->field($model, 'train_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

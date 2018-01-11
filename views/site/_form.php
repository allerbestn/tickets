<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Routes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_till')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_dep')->textInput() ?>

    <?= $form->field($model, 'time_dep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cars_count')->textInput() ?>

    <?= $form->field($model, 'free_places')->textInput() ?>

    <?= $form->field($model, 'arrival_date')->textInput() ?>

    <?= $form->field($model, 'arrival_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'train_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Додати' : 'Редагувати', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Замовити квиток';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'stationFrom')->textInput()->label('Звідки') ?>
    <?= $form->field($model, 'stationTill')->textInput()->label('Куди') ?>

    <?= $form->field($model, 'dateDeparture')
        ->widget(DateTimePicker::className(), [
            'name' => 'datetime_10',
            'value' => date('d-M-Y', strtotime('+2 days')),
            'pluginOptions' => [
                'format' => 'dd-mm-yyyy',
                'todayHighlight' => true
            ]
        ])->label('Дата відправлення') ?>

    <?= $form->field($model, 'timeDeparture')->textInput(['placeholder' => '15:00'])->label('Час відправлення') ?>
    <?= $form->field($model, 'roundTrip')->checkbox(['label' => 'Туди й назад']) ?>
    <?= Html::submitButton('Пошук поїздів', ['class' => 'btn btn-success', 'name' => 'submit']) ?>

<?php $form = ActiveForm::end() ?>


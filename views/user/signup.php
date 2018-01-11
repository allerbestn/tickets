<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Реєстрація';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <h1>Зареєструватися</h1>
    <p>Заповніть всі поля для того щоб зареєструватися на сайті:</p>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'firstName')->textInput(['autofocus' => 'true'])->label('Імя') ?>
    <?= $form->field($model, 'lastName')->textInput()->label('Прізвище') ?>
    <?= $form->field($model, 'email')->textInput()->label('E-Mail') ?>
    <?= $form->field($model, 'login')->textInput()->label('Логін') ?>
    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
    <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary']) ?>
    <?php ActiveForm::end(); ?>
</div>

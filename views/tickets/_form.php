<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Routes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routes-form">

    <table class="table table-bordered">
        <thead>
            <tr>
                <td colspan="2" class="text-center">Основна інформація</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Номер поїзда: </td>
                <td><?= $model->train_number ?></td>
            </tr>
            <tr>
                <td>Станція відправлення: </td>
                <td><?= $model->station_from ?></td>
            </tr>

            <tr>
                <td>Станція призначення: </td>
                <td><?= $model->station_till ?></td>
            </tr>

            <tr>
                <td>Дата та ча відправлення поїзда: </td>
                <td><?= $model->date_dep . " " . $model->time_dep ?></td>
            </tr>

            <tr>
                <td>Дата та час прибуття поїзда: </td>
                <td><?= $model->arrival_date . " " . $model->arrival_time ?></td>
            </tr>

            <tr>
                <td>Дата та час замовлення: </td>
                <td><?php echo date('l jS \of F Y h:i:s A') ?></td>
            </tr>

            <tr>
                <td>Кількість проїзних документів: </td>
                <td>1</td>
            </tr>
        </tbody>
    </table>

    <?= Html::a('Оплатити', ['payment/payment'], ['class' => 'btn btn-success']) ?>

</div>

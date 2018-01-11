<?php

namespace app\controllers;

use yii\web\Controller;

class PaymentController extends Controller
{
    public function actionPayment()
    {
        return $this->render('payment');
    }
}
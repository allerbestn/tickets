<?php

namespace app\controllers;

use app\models\OrderTicketForm;
use app\models\Routes;
use app\models\RoutesSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TicketsController extends Controller
{
    public function actionOrderticket()
    {
        $model = new OrderTicketForm();

        session_start();
        $_SESSION['ticket'] = $_POST['OrderTicketForm'];

        if ($model->dataIsEntered()) {
            $this->redirect(['tickets/index']);
        }

        return $this->render('orderticket', [
            'model' => $model,
        ]);
    }

    public function actionFoundroutes()
    {
        $model = new Routes();
        return $this->render('foundroutes', ['model' => $model]);
    }

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new RoutesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    //оплата
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_route]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    protected function findModel($id)
    {
        if (($model = Routes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
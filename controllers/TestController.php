<?php

namespace app\controllers;


use app\components\TestService;
use app\models\User;
use yii\db\Query;
use yii\helpers\VarDumper;
use yii\web\Controller;
use app\models\Test;

class TestController extends Controller
{

    public function actionIndex()
    {

        $model = User::findOne(1);


        $result =  $model->getTasksCreated()->all();

        return $this->render('index', [
           'result'=> $result,
        ]);
    }


}


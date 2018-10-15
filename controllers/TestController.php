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
//        $model->touch();
        $model->username='505';
        $model->name='505';
        $model->password_hash='505';
//        $model->creator_id=20;
        $model->access_token='2';
//        $model->auth_key='2';
//        $model->updater_id='2';
//        $model->created_at='2';
//        $model->updated_at='2';


        $model->save();



//        $model = User::findOne(1);
//
//
//        $result =  $model->getTasksCreated()->all();
        $result =  $model;
        return $this->render('index', [
           'result'=> $result,
        ]);



    }


}


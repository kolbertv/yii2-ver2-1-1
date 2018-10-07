<?php

namespace app\controllers;


use app\components\TestService;
use yii\helpers\VarDumper;
use yii\web\Controller;
use app\models\Test;

class TestController extends Controller
{

    public function actionIndex()
    {

//        $test = new TestService();
//        $test -> run();
//
//
        $model = new Test();
        $model->id = 1231232132;
        $model->name = 'Пироженка';
        $model->price = 123;
        $model->category = 'Сладкости';
        $model->prop = \Yii::$app->test->run() ;


        $result = \Yii::$app->db->createCommand('select * from product')->queryAll();
//        return VarDumper::dumpAsString($result, 5, true);
//        return debug($result);



        return $this->render('index', [
            'testTitle' => 'Тестовая страница',
            'result' => $result,
            'model' => $model,
        ]);
    }


}


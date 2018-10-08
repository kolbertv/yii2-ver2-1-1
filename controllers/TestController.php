<?php

namespace app\controllers;


use app\components\TestService;
use yii\db\Query;
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

    public function actionInsert()
    {
        $result = \Yii::$app->db->createCommand()->insert('user', array(
                'username'=> 'vasya',
                'name'=> 'vastya',
                'password_hash'=> '1234567890',
                'access_token'=> '123456789',
                'auth_key'=> '1234567',
                'creator_id'=> '234567',
                'updater_id'=> '1234567',
                'created_at'=> '23456',
                'updated_at'=> '234567',

        ))->execute();

        return 'данные добавлены';

    }


    public function actionSelect()
    {

        $query1 = (new Query())->from('user')->where('id = 1');
        $query2 = (new Query())->from('user')->where('id > 1')->orderBy('name ASC');
        $result1 = $query1->all();
        $result2 = $query2->all();

            return VarDumper::dumpAsString($result2, 5, true);

    }




}


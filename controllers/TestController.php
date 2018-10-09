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
        $model->prop = \Yii::$app->test->run();


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

        /*
         * Вставка данных в юзер
         */

//        $result = \Yii::$app->db->createCommand()->insert('user', array(
//                'username'=> 'vasya',
//                'name'=> 'vastya',
//                'password_hash'=> '1234567890',
//                'access_token'=> '123456789',
//                'auth_key'=> '1234567',
//                'creator_id'=> '234567',
//                'updater_id'=> '1234567',
//                'created_at'=> '23456',
//                'updated_at'=> '234567',
//
//        ))->execute();

        /*
         * Вставка нескольких записей в таск
         */

        \Yii::$app->db->createCommand()->batchInsert('task',
            ['title', 'description', 'creator_id', 'updater_id', 'created_at', 'updated_at'],
            [
                ['zadacha1', 'bolshaya zadacha 1', '1', '123', '234', '234'],
                ['zadacha2', 'bolshaya zadacha 2', '2', '123', '234', '234'],
                ['zadacha3', 'bolshaya zadacha 3', '1', '123', '234', '234'],
            ]
        )->execute();

        return 'данные добавлены';

    }

    public function actionSelect()
    {

        /*
         *  Вывод данных из таблици юзер
         */
//        $query1 = (new Query())->from('user')->where('id = 1');
//        $query2 = (new Query())->from('user')->where('id > 1')->orderBy('name ASC');
//        $result1 = $query1->all();
//        $result2 = $query2->all();


        /*
         * вывод содержимого task с присоединенным user
         */

        $query1 = (new Query())->from('task')->innerJoin('user', 'user.id = task.creator_id');
        $result1 = $query1->all();


        return VarDumper::dumpAsString($result1, 5, true);

    }


}


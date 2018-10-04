<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.10.2018
 * Time: 10:37
 */

namespace app\controllers;


use yii\base\Controller;

class MyController extends AppController
{
    public function actionIndex() {

        $id = strip_tags($_GET['id']);
        $hi = 'Hello world';
//        return $this->render('index',['hello'=> $hi]);
        return $this->render('index',compact('hi', 'id'));
    }

    public function actionBlogPost()
    {
        return 'Blog Post';
    }


}
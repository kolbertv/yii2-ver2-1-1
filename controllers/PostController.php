<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.10.2018
 * Time: 15:04
 */

namespace app\controllers;

use Yii;


class PostController extends AppController
{

    public function actionIndex() {

        return $this->render('test');
    }

    public function actionShow() {

        return $this->render('show');
    }


}
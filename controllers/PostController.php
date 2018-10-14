<?php
/**
 * Created by PhpStorm.
 * UserBase: UserBase
 * Date: 04.10.2018
 * Time: 15:04
 */

namespace app\controllers;

use Yii;


class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex() {

        return $this->render('test');
    }

    public function actionShow() {

//        $this->layout='basic';

        return $this->render('show');
    }


}
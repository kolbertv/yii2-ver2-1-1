<?php
/**
 * Created by PhpStorm.
 * UserBase: UserBase
 * Date: 04.10.2018
 * Time: 14:07
 */

namespace app\controllers\admin;

use yii\web\Controller;


class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
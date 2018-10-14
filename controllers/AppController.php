<?php
/**
 * Created by PhpStorm.
 * UserBase: UserBase
 * Date: 04.10.2018
 * Time: 15:02
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{

    public function debug($arr) {

        echo '<pre>' .print_r($arr, true) . '</pre>';

    }


}


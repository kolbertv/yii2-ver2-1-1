<?php
/**
 * Created by PhpStorm.
 * UserBase: UserBase
 * Date: 01.10.2018
 * Time: 11:30
 */

namespace app\components;

use yii\base\Component;

class TestService extends Component
{

    public $prop = 'default';

    public function run()
    {
        return $this->prop;
    }


}
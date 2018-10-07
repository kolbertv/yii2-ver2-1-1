<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

//$this->title = 'Test';
//$this->params['breadcrumbs'][] = $this->title;

echo \yii\helpers\VarDumper::dumpAsString($result, 5, true);

?>



<?php
/**
 * @var string $testTitle
 * @var \app\models\Product $model
 */
?>


    <div class="test-about">
    <h1><?= $testTitle ?></h1>


<?= \yii\widgets\DetailView::widget(['model'=>$model]) ?>
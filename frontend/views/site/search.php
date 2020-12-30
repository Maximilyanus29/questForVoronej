<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductCRUD */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>


<h1><?= Html::encode($this->title) ?></h1>



<?php  echo $this->render('_search', ['model' => $searchModel]); ?>


<?php
foreach ($dataProvider->query->all() as $value)
{
    echo $value->id;
}

;?>







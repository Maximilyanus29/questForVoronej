<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->registerCssFile('css/index.css');
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Список категорий</h1>


    </div>

    <div class="body-content">


        <?php foreach ($categories as $category): ?>


            <a class="category" href="<?php echo Url::to(['site/product','categoryId'=>$category->id]) ?>"><?= $category->name ?></a>


        <?php endforeach; ?>


    </div>
</div>

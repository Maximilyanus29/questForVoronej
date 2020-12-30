<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->registerCssFile('css/index.css');
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Список Продуктов категории </h1>


    </div>

    <div class="container">


        <div class="filter">

            <?php $form = ActiveForm::begin([
                'action' => ['product','categoryId'=>$categoryId],
                'method' => 'get',
            ]); ?>


            <?= $form->field($searchModel, 'min_price')->label('минимальная цена') ?>

            <?= $form->field($searchModel, 'max_price')->label('максимальная цена') ?>

            <?= $form->field($searchModel, 'width')->label('ширина') ?>

            <?= $form->field($searchModel, 'height')->label('высота') ?>

            <?= $form->field($searchModel, 'lenght')->label('длина') ?>


            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

        <div class="products">

            <?php foreach ($products as $product): ?>


            <div class="product">
                <div class="img">Артикул - <?= $product->vendor_code ?></div>
                <div class="size">
                    <div class="s">ширина - <?= $product->width ?></div>
                    <div class="s">высота - <?= $product->height ?></div>
                    <div class="s">длина - <?= $product->lenght ?></div>
                </div>
                <div class="price">
                    <div class="sklad">Есть на складе? - <?= $sklad = $product->on_warehouse?"Да":"Нет" ;?></div>
                    <div class="sklad">цена - <?= $product->price ?>р</div>
                </div>

            </div>


            <?php endforeach; ?>


        </div>






    </div>
</div>

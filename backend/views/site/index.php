<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->registerCssFile('css/index.css');
$this->registerJsFile('js/index.js');
?>


    <div id="NW">
        <h1 align="center">addProd</h1>
<!--        <form action="" class="addProduct">-->
<!--            <input type="text" placeholder="asf" name="awf">-->
<!--            <input type="text" placeholder="asf" name="awf">-->
<!--            <input type="text" placeholder="asf" name="awf">-->
<!--            <input type="text" placeholder="asf" name="awf">-->
<!--            <input type="text" placeholder="asf" name="awf">-->
<!--            <select name="sad" id="">-->
<!--                <option value="awf0">wagesa</option>-->
<!--                <option value="awf0">wagesa</option>-->
<!--                <option value="awf0">wagesa</option>-->
<!--                <option value="awf0">wagesa</option>-->
<!--            </select>-->


            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'article') ?>

            <?= $form->field($model, 'length') ?>
            <?= $form->field($model, 'band') ?>
            <?= $form->field($model, 'thickness') ?>
            <?= $form->field($model, 'price') ?>
            <?= $form->field($model, 'quantity') ?>
            <?= $form->field($model, 'parent_id') ?>

            <div class="form-group">
                <button id="send">send</button>
            </div>
            <?php ActiveForm::end(); ?>


        </form>
    </div>


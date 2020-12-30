<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductCRUD */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vendor_code') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'width') ?>

    <?= $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'lenght') ?>

    <?php // echo $form->field($model, 'on_warehouse') ?>

    <?php // echo $form->field($model, 'in_category') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

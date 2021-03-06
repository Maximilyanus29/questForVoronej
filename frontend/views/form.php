<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchProduct */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'length') ?>
        <?= $form->field($model, 'band') ?>
        <?= $form->field($model, 'thickness') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'quantity') ?>
        <?= $form->field($model, 'parent_id') ?>
        <?= $form->field($model, 'article') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- form -->

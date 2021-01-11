<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form ActiveForm */
?>
<div class="formasfafas">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'article') ?>
        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'length') ?>
        <?= $form->field($model, 'band') ?>
        <?= $form->field($model, 'thickness') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'quantity') ?>
        <?= $form->field($model, 'parent_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- formasfafas -->

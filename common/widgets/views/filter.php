<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



?>

<div class="col-sm-3">




<?php
$form = ActiveForm::begin([
//        'fieldConfig' => [
//        'options' => [
//            'tag' => false,
//            ]
//        ],
    'method'=>'get',
]);
?>








        <div class="filter-nav">
            Фильтры
        </div>



        <div class="filter">

            <div class="f-item">
                <div class="f-item-title ">
                    <input type="hidden" name="SearchProduct[type][Длина]">
                    <span>Длина</span>
                </div>
                <div class="f-item-body ">
                    <div class="row">

                        <?php foreach ($length as $len): ?>
                        <div class="col-xs-6">

                            <?= $form->field($search, 'length') ->checkbox([

                                    'label'=>$len->value,
                            ]);?>



                        </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="f-item">
                <div class="f-item-title ">
                    <input type="hidden" name="SearchProduct[type][Изгиб]">
                    <span>Изгиб</span>
                </div>
                <div class="f-item-body ">
                    <div class="row">





                        <?php foreach ($band as $ban): ?>
                            <div class="col-xs-6">
                                <?= $form->field($search, 'band') ->checkbox([
                                    'label'=>$ban->value,


                                ]);?>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
            <div class="f-item">
                <div class="f-item-title ">
                    <input type="hidden" name="SearchProduct[type][Толщина]">
                    <span>Толщина</span>
                </div>
                <div class="f-item-body ">
                    <div class="row">



                        <?php foreach ($thickness as $thi): ?>
                            <div class="col-xs-6">
                                <?= $form->field($search, 'thickness') ->checkbox([
                                    'label'=>$thi->value,

                                ]);?>
                            </div>



                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
            <div class="f-item">
                <div class="f-item-title active">
                    <span>Цена</span>
                </div>
                <div class="f-item-body f-item-body-price in">
                    <div class="slider-price">
                        <div class="s-price">

                            <?= $form->field($search, 'beginPrice')->label(false)->textInput([
                                'id'=>'cost-min',
                                'data-min'=>'0',
                                'data-max'=>'1530',
                                'class'=>'cost-min',
                                'value'=>0,
                                'template'=>'',
                                'type'=>'text',
                            ]); ?>
                            <?= $form->field($search, 'endPrice')->label(false)->textInput([
                                'id'=>'cost-max',
                                'data-min'=>'0',
                                'data-max'=>'1530',
                                'class'=>'cost-max',
                                'value'=>1530,
                                'template'=>'',
                                'type'=>'text',
                            ]); ?>

<!--                            <input type="text" id="cost-min" name="SearchProduct[price_min]" data-min="0" data-max="1530" class="cost-min" value="0">-->
<!--                            <input type="text" id="cost-max" data-min="0" data-max="1530" class="cost-max" name="SearchProduct[price_max]" value="1530">-->

                        </div>
                        <div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                    </div>
                </div>
            </div>
        </div>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>



        <?php ActiveForm::end(); ?>

</div>
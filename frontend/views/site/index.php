<?php

use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

$this->registerCssFile('css/index.css');
$this->registerJsFile('js/common.js');
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

    <div class="search">
        <h2 align="center">Подобрать товар</h2>
        <form id="form">
            <label for="">ширина</label>
            <select name="ProductCRUD[width]" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <label for="">высота</label>
            <select name="ProductCRUD[height]" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>


            <label for="">длина</label>
            <select name="ProductCRUD[lenght]" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>

            <br>

<!--            <input name="width" type="text" placeholder="Ширина">-->
<!--            <input name="height" type="text" placeholder="Высота">-->
<!--            <input name="length"type="text" placeholder="Длина">-->
            <label for="">Артикул</label>
            <input id="vendor" name="vendor" type="text" placeholder="Артикул">
            <label for="">цена</label>
            <input id="price" name="price"type="text" placeholder="цена">
            <label for="">Остаток</label>
            <input id="sklad" name="on_wesa" type="text" placeholder="Остаток">
        </form>
    </div>
</div>

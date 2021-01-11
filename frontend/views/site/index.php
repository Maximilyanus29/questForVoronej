<?php use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm; ?>
<h1>Черные ресницы</h1>
</div>
<p></p>
<div class="row" id="goods-all">




<?php foreach ($model as $item): ?>

<div class="col-sm-4 col-xs-6" data-sort-price="850" itemscope="" itemtype="http://schema.org/Product">
    <a href="<?= Url::to(['site/view/'.$item->url]) ?>" class="goods-item" title="Ресницы BARBARA Elegant микс черные">
        <span class="gi-title">
            <span class="add-comparison " data-id="250" data-on="0">В избранное</span>
        </span>
        <span class="gi-name" itemprop="name"><?= $item->name;  ?></span>
        <span class="gi-img">
            <img src="/Черные ресницы Enigma, Shine, Barbara_files/image-by-item-and-alias" alt="Ресницы BARBARA Elegant микс черные" itemprop="image">
        </span>
        <span class="gi-description" itemprop="description"><?= substr($item->description,0,70)."..." ;  ?></span>
        <span class="gi-price" itemprop="offers" itemscope="" itemtype="http://schema.org/AggregateOffer">
        <meta itemprop="lowPrice" content="850">
        <meta itemprop="priceCurrency" content="RUB">
        От <span class="price">850</span><span class="rub"></span>
        </span>
    </a>
</div>

<?php endforeach; ?>

</div>
<div class="text-center">
    <div class="catalogButton" id="add-goods-list">
        <a href="https://glance.market/resnicy/resnicy-2/cernye-resnicy?page=2" class="btn-accent" style="margin-top: 20px;" data-page="next">показать ещё (<span id="countPageResidue">6</span>)</a>
        <a href="https://glance.market/resnicy/resnicy-2/cernye-resnicy?page=10000" class="btn-accent" style="margin-top: 20px;" data-page="next">показать все (<span id="countTotalPageResidue">6</span>)</a>
    </div>
</div>
<br>
<h2>Чёрные ресницы — купить в Воронеже с доставкой</h2>
<p>Lash интернет-магазин Glance.Market представляет Вам ассортимент чёрных ресниц для наращивания от брендов с мировой известностью, в том числе от SHINE, Flario Glossy, Vivienne, Barbara, Enigma.&nbsp;</p>
<p><strong>Чёрные ресницы</strong> — это универсальный вариант, классика, уместная всегда. В каталоге Вы найдёте ресницы различной длины, толщины и изгиба, что позволит максимально качественно подойти даже к самым нестандартным задачам.<br>
    Чтобы оформить заказ или получить помощь в подборе товара, просто свяжитесь с нами по телефонам, указанным на сайте. Оперативно ответим на Ваши вопросы и подберём именно то, что Вам нужно.&nbsp;<br>
    Доставляем товар по Воронежу! Стоимость услуги 250 рублей, при заказе от 1300 рублей привезём бесплатно. Доставка осуществляется на следующий день после Вашего заказа с 11 до 15 часов дня. Возможен самовывоз!</p>
</div>
</div>
</div>
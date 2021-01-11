<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Filter;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
//$this->registerCssFile('Черные ресницы Enigma, Shine, Barbara_files/css');
//$this->registerCssFile('Черные ресницы Enigma, Shine, Barbara_files/7fd7ebd98fc9f4f7a97703cca96afcfd.css');


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<header>
    <div class="top-nav">
        <div class="container">
            <a href="https://glance.market/" class="top-nav__location"><span>Воронеж</span> <span class="top-nav__arrow">u</span></a>
            <a href="<?= Url::to(['site/payment'])?>">Оплата и доставка</a><a href="https://glance.market/optovym-klientam">Оптовым клиентам</a><a href="https://glance.market/obucenie">Обучение</a><a href="https://glance.market/kontakt">Контакты</a>
        </div>
    </div>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="h-tel">
                        <a href="tel:+74732021313">+7 (473) <span>202-13-13</span></a>
                    </div>
                </div>
                <div class="col-sm-3 text-center">
                    <button class="btn-accent btn-zv" data-toggle="modal" data-target=".modal-zv">Заказать звонок</button>
                </div>
                <div class="col-sm-4">
                    <form id="w1" action="https://glance.market/submit/searchs" method="get"> <div id="search_div_block" class="search_div_block">
                            <div class="input-group h-serch">
                                <input id="search_goods" type="text" placeholder="Я ищу..." name="GoodsSearch[search_word]" autocomplete="off" class="form-control" value="">
                                <span class="input-group-addon serch-btn" onclick="$(this).parent().trigger(&#39;submit&#39;)"></span>
                                <div id="search_div_list" class="search_div_list hidden"></div>
                            </div>
                        </div>
                    </form> </div>
                <div class="col-sm-2">
                    <button class="btn-accent btn-in" data-toggle="modal" data-target=".auth">Войти</button>
                </div>
            </div>
        </div>
    </div>
    <div class="h-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://glance.market/" class="logo" title="GlanceMarket">
                        <img src="/Черные ресницы Enigma, Shine, Barbara_files/logo.png" alt="GlanceMarket">
                    </a>
                </div>
                <div class="col-sm-8">
                    <div class="nav-open"></div>
                    <nav class="h-catalog">
                        <ul><li><a href="https://glance.market/resnicy"> Ресницы</a><ul><li><a href="https://glance.market/resnicy/pincety-dla-resnic">Пинцеты для ресниц</a></li><li><a href="https://glance.market/resnicy/klea-dla-resnic">Клей для ресниц</a></li><li><a href="https://glance.market/resnicy/cehly-dla-pincetov">Чехлы для пинцетов</a></li><li><a href="https://glance.market/resnicy/polupermanentnaa-tus">Полуперманентная тушь</a></li><li><a href="https://glance.market/resnicy/resnicy-2"> Ресницы для наращивания</a></li><li><a href="https://glance.market/resnicy/preparaty-dla-resnic">Препараты для ресниц</a></li><li><a href="https://glance.market/resnicy/laminirovanie-i-biozavivka">Ламинирование и биозавивка</a></li><li><a href="https://glance.market/resnicy/soputstvuusie-tovary-dla-resnic">Сопутствующие товары для ресниц</a></li></ul></li><li><a href="https://glance.market/procie-tovary">Прочие товары</a><ul><li><a href="https://glance.market/procie-tovary/aksessuary">Аксессуары</a></li><li><a href="https://glance.market/procie-tovary/antisepticeskie-sr-va">Антисептические ср-ва</a></li><li><a href="https://glance.market/procie-tovary/sredstva-dla-volos">Средства для волос</a></li><li><a href="https://glance.market/procie-tovary/uhod-dla-lica">Уход для лица</a></li><li><a href="https://glance.market/procie-tovary/pedikur">Педикюр</a></li></ul></li><li><a href="https://glance.market/brovi"> Брови</a><ul><li><a href="https://glance.market/brovi/pincety-dla-brovej">Пинцеты для бровей</a></li><li><a href="https://glance.market/brovi/hna-dla-brovej">Хна для бровей</a></li><li><a href="https://glance.market/brovi/kraska-dla-brovej">Краска для бровей</a></li><li><a href="https://glance.market/brovi/preparaty-dla-brovej">Препараты для бровей</a></li><li><a href="https://glance.market/brovi/makiaz-i-uhod-dla-brovej">Макияж и уход для бровей</a></li><li><a href="https://glance.market/brovi/instrumenty">Инструменты</a></li></ul></li></ul>
                        <ul class="mobi-nav-bottom">
                            <li><a href="<?= Url::to(['site/payment'])?>">Оплата и доставка</a></li>
                            <li><a href="<?= Url::to(['site/optclient'])?>"">Оптовым клиентам</a></li>
                            <li><a href="<?= Url::to(['site/education'])?>"">Обучение</a></li>
                            <li><a href="<?= Url::to(['site/contacts'])?>"">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">

        <div class="pull-right">
            <span class="sort-price" id="priceUp" data-go-sort="1">Цена</span>
        </div>
        <ol class="breadcrumb">
            <li><a href="https://glance.market/resnicy" title=" Ресницы"> Ресницы</a></li><li class="active"><a href="https://glance.market/resnicy/resnicy-2" title=" Ресницы для наращивания"> Ресницы для наращивания</a></li><li>Черные ресницы</li> </ol>
        <div class="row">

            <?=  Filter::widget(); ?>

            <div class="col-sm-9">
                <div class="catalog-title">

                <?= $content ?>

                </div>
            </div>
        </div>
    </div>
</main>

                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="https://glance.market/" class="f-logo" title="GlanceMarket">
                                        <img src="/Черные ресницы Enigma, Shine, Barbara_files/logo.png" alt="GlanceMarket">
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <ul class="f-nav"><li><a href="https://glance.market/resnicy"> Ресницы</a><ul><li><a href="https://glance.market/resnicy/pincety-dla-resnic">Пинцеты для ресниц</a></li><li><a href="https://glance.market/resnicy/klea-dla-resnic">Клей для ресниц</a></li><li><a href="https://glance.market/resnicy/cehly-dla-pincetov">Чехлы для пинцетов</a></li><li><a href="https://glance.market/resnicy/polupermanentnaa-tus">Полуперманентная тушь</a></li><li><a href="https://glance.market/resnicy/resnicy-2"> Ресницы для наращивания</a></li><li><a href="https://glance.market/resnicy/preparaty-dla-resnic">Препараты для ресниц</a></li><li><a href="https://glance.market/resnicy/laminirovanie-i-biozavivka">Ламинирование и биозавивка</a></li><li><a href="https://glance.market/resnicy/soputstvuusie-tovary-dla-resnic">Сопутствующие товары для ресниц</a></li></ul></li><li><a href="https://glance.market/procie-tovary">Прочие товары</a><ul><li><a href="https://glance.market/procie-tovary/aksessuary">Аксессуары</a></li><li><a href="https://glance.market/procie-tovary/antisepticeskie-sr-va">Антисептические ср-ва</a></li><li><a href="https://glance.market/procie-tovary/sredstva-dla-volos">Средства для волос</a></li><li><a href="https://glance.market/procie-tovary/uhod-dla-lica">Уход для лица</a></li><li><a href="https://glance.market/procie-tovary/pedikur">Педикюр</a></li></ul></li><li><a href="https://glance.market/brovi"> Брови</a><ul><li><a href="https://glance.market/brovi/pincety-dla-brovej">Пинцеты для бровей</a></li><li><a href="https://glance.market/brovi/hna-dla-brovej">Хна для бровей</a></li><li><a href="https://glance.market/brovi/kraska-dla-brovej">Краска для бровей</a></li><li><a href="https://glance.market/brovi/preparaty-dla-brovej">Препараты для бровей</a></li><li><a href="https://glance.market/brovi/makiaz-i-uhod-dla-brovej">Макияж и уход для бровей</a></li><li><a href="https://glance.market/brovi/instrumenty">Инструменты</a></li></ul></li></ul> </div>
                            </div>
                            <div class="f-bottom">
                                <div class="row">
                                    <div class="col-md-5 col-sm-4" itemscope="" itemtype="http://schema.org/Organization">
                                        <meta itemprop="name" content="Glance Market">
                                        <meta itemprop="address" content="ул. Шишкова д. 70">
                                        <meta itemprop="address" content="Ленинский пр-кт, д. 111-А">
                                        <a href="tel:+74732021313" class="f-tel" itemprop="telephone">+7 473 202-13-13</a>
                                        <a href="mailto:info@glance.market" class="f-mail" itemprop="email">info@glance.market</a><br>
                                        <a href="tel:+79304131413" class="f-tel" itemprop="telephone">+7 930 413-14-13</a>
                                    </div>
                                    <div class="col-md-7 col-sm-8">
                                        <ul class="f-nav-bottom">
                                            <li><a href="<?= Url::to('site/payment')?>">Оплата и доставка</a></li>
                                            <li><a href="<?= Url::to('site/optclient')?>">Оптовым клиентам</a></li>
                                            <li><a href="<?= Url::to('site/edu')?>">Обучение</a></li>
                                            <li><a href="<?= Url::to('site/contact')?>">Контакты</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="social">
                                        <a href="https://www.instagram.com/glance.market/" title="Glancemarket Instagram" class="inst" target="_blank"></a>
                                        <a href="https://vk.com/glance.market" title="Glancemarket Vk" class="vk" target="_blank"></a>
                                        <a href="https://www.facebook.com/glance.market/" title="Glancemarket Facebook" class="fb" target="_blank"></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="f-zv">
                                        <button class="btn-accent" data-toggle="modal" data-target=".modal-zv">Заказать звонок</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>


                    <div class="bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">© Glance Market. 2019. Все права защищины</div>
                                <div class="col-sm-4">
                                    <div class="madein">
                                        <a href="https://intrid.ru/site" target="_blank" title="Разработка сайтов в INTRID">made in <b>INTRID</b></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="card-fix " href="https://glance.market/cart" title="Перейти в корзину">
<span class="quantity">
<span class="quant" id="countLayout">0</span>
</span>
                        <span class="amount">Всего:<br> <span id="totalPriceLayout"></span><span class="rub"></span></span>
                    </a>
                    <a href="https://glance.market/catalog/favourites" id="favorit-link"><span class="fix-comparison__number"></span></a>

                    <script async="" src="/Черные ресницы Enigma, Shine, Barbara_files/tag.js.Без названия"></script>
                    <div class="modal fade modal-avice" id="modal-rec">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="zag" id="modal-rec-zag"></div>
                                <span id="modal-rec-content"></span>
                            </div>
                        </div>
                    </div> <div class="modal fade" id="modal-window" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div id="modal-all-container">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade modal-avice" id="modal-info">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="zag" id="modal-info-title">Пилинг-варежка для тела</div>
                                <span id="modal-info-body"></span>
                            </div>
                        </div>
                    </div>

                    <script>jQuery(function ($) {
                            jQuery('#w0').yiiActiveForm([],[]);
                            jQuery('#w1').yiiActiveForm([],[]);
                        });</script>


                <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

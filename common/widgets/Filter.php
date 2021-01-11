<?php
namespace common\widgets;

use common\models\Band;
use common\models\Length;
use common\models\Thickness;
use frontend\models\SearchProduct;
use Yii;
use yii\base\Widget;

/**
 * Alert widget renders a message from session flash. All flash messages are displayed
 * in the sequence they were assigned using setFlash. You can set message as following:
 *
 * ```php
 * Yii::$app->session->setFlash('error', 'This is the message');
 * Yii::$app->session->setFlash('success', 'This is the message');
 * Yii::$app->session->setFlash('info', 'This is the message');
 * ```
 *
 * Multiple messages could be set as follows:
 *
 * ```php
 * Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
 * ```
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Makarov <sam@rmcreative.ru>
 */
class Filter extends Widget
{



    public function init()
    {
        parent::init();


    }

    public function run()
    {
        $length = Length::find()->all();
        $band = Band::find()->all();
        $thickness = Thickness::find()->all();

        $search = new SearchProduct();

//        var_dump($length);exit();

        return $this->render('filter',[
            'length'=>$length,
            'band'=>$band,
            'thickness'=>$thickness,
            'search'=>$search,
        ]);

    }
}

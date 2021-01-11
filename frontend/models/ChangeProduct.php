<?php


namespace frontend\models;


use Yii;
use yii\web\Response;

class ChangeProduct
{


    public $goods_id;
    public $lengthArray=[];
    public $bandArray=[];
    public $thicknessArray=[];
    public $price;
    public $status;





    public function buildModel($postData)
    {

        $this->goods_id =  $postData['goods'];

        $connection = \Yii::$app->db;

        $products_list = $connection->createCommand('
             SELECT p.*,len.id as length, b.id as band, th.id as thickness
             from product as p 
             LEFT JOIN length as len on p.length = len.id 
             left join band as b on p.band = b.id 
             left join thickness as th on p.thickness = th.id 
             WHERE p.parent_id = :id
')
            ->bindValue(':id',$postData['goods'])

            ->queryAll();

        $products_list_soft_on_field = array_filter($products_list, function($v) use ($postData){
            return

                $v[$postData['trent']] == $postData['parametersList'][$postData['trent']];

        });


        $data = $products_list_soft_on_field;

        return $data;

    }

}
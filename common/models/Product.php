<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $vendor_code
 * @property int $price
 * @property int $width
 * @property int $height
 * @property int $lenght
 * @property int $on_warehouse
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_code', 'price', 'width', 'height', 'lenght', 'on_warehouse'], 'required'],
            [['price', 'width', 'height', 'lenght', 'on_warehouse'], 'integer'],
            [['vendor_code'], 'string', 'max' => 30],
            [['vendor_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vendor_code' => 'Vendor Code',
            'price' => 'Price',
            'width' => 'Width',
            'height' => 'Height',
            'lenght' => 'Lenght',
            'on_warehouse' => 'On Warehouse',
        ];
    }
}

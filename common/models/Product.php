<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $article

 * @property int $length
 * @property int $band
 * @property int $thickness
 * @property int $price
 * @property int $quantity
 * @property int $parent_id
 *
 * @property ProductParent $parent
 * @property Thickness $thickness0
 * @property Band $band0
 * @property Length $length0
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
            [['article', 'description', 'length', 'band', 'thickness', 'price', 'quantity', 'parent_id'], 'required'],

            [['length', 'band', 'thickness', 'price', 'quantity', 'parent_id'], 'integer'],
            [['article'], 'string', 'max' => 30],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductParent::className(), 'targetAttribute' => ['parent_id' => 'id']],
            [['thickness'], 'exist', 'skipOnError' => true, 'targetClass' => Thickness::className(), 'targetAttribute' => ['thickness' => 'id']],
            [['band'], 'exist', 'skipOnError' => true, 'targetClass' => Band::className(), 'targetAttribute' => ['band' => 'id']],
            [['length'], 'exist', 'skipOnError' => true, 'targetClass' => Length::className(), 'targetAttribute' => ['length' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article' => 'Article',

            'length' => 'Length',
            'band' => 'Band',
            'thickness' => 'Thickness',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'parent_id' => 'Parent ID',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(ProductParent::className(), ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[Thickness0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getThickness0()
    {
        return $this->hasOne(Thickness::className(), ['id' => 'thickness']);
    }

    /**
     * Gets query for [[Band0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBand0()
    {
        return $this->hasOne(Band::className(), ['id' => 'band']);
    }

    /**
     * Gets query for [[Length0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLength0()
    {
        return $this->hasOne(Length::className(), ['id' => 'length']);
    }
}

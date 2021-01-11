<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_parent".
 *
 * @property int $id
 * @property string $name
 * @property int $in_category
 * @property string $brand
 * @property string $description
 * @property string $url
 *
 * @property Product[] $products
 * @property Category $inCategory
 */
class ProductParent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_parent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'in_category', 'brand'], 'required'],
            [['in_category'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['brand'], 'string', 'max' => 55],
            [['in_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['in_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'in_category' => 'In Category',
            'brand' => 'Brand',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['parent_id' => 'id']);
    }

    /**
     * Gets query for [[InCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'in_category']);
    }
}

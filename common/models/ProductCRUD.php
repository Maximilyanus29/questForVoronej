<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Product;

/**
 * ProductCRUD represents the model behind the search form of `common\models\Product`.
 */
class ProductCRUD extends Product
{
    public $min_price;
    public $max_price;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'width', 'height', 'lenght', 'on_warehouse', 'in_category','min_price','max_price'], 'integer'],
            [['width','height', 'lenght'] ,'number', 'min'=>1,'max'=>5],
            [['vendor_code'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Product::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
//            'price' => $this->price,
            'width' => $this->width,
            'height' => $this->height,
            'lenght' => $this->lenght,
            'on_warehouse' => $this->on_warehouse,
            'in_category' => $this->in_category,
        ]);

        $query->andFilterWhere(['like', 'vendor_code', $this->vendor_code])
            ->andFilterWhere([
                'and',
                ['>','price',$this->min_price],
                ['<','price',$this->max_price],
            ]);

        return $dataProvider;
    }
}

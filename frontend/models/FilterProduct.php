<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class FilterProduct extends Model
{
    public $width;
    public $height;
    public $lenght;
    public $priceBefore;
    public $priceAfter;

    public function rules()
    {
        return [
            ['width', 'integer','max'=>5],
            ['height', 'integer','max'=>5],
            ['lenght', 'integer','max'=>5],
            ['priceBefore', 'double'],
            ['priceAfter', 'double'],

        ];
    }






}

<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class TireFilterModel extends Model
{
    public $width;
    public $height;
    public $diameter;
    public $season;
    public $manufacturer;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['width', 'height'], 'integer'],
//            ['diameter', ''],
            [ 'season', 'in', 'range' => ['летние', 'зимние', 'всесезонные']],
//            ['manufacturer',''],
        ];
    }

}

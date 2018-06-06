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
class DiskFilterModel extends Model
{
    public $disk_type;
    public $diameter;
    public $mount;//PCD
    public $distance;//PCD
    public $width;
    public $to_width;
    public $vilet;
    public $to_vilet;
    public $manufacturer;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['disk_type', 'in', 'range' => ['штампованные', 'литые']],
            [['diameter','mount','distance','width','vilet'], 'integer'],
            ['manufacturer', 'each', 'rule' => ['in', 'range' => ['LegeArtis','K&K','Replay','Advanti']]],

        ];
    }
}

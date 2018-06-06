<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "table_225".
 *
 * @property int $id
 * @property int $cat_id
 * @property int $vendor_id
 * @property string $vendor
 * @property string $name
 * @property string $name_short
 * @property string $product_name
 * @property int $img_100x200
 * @property string $imgs
 * @property string $p_8
 * @property string $p_9
 * @property string $p_10
 * @property string $p_1
 * @property string $p_2
 * @property string $p_3
 * @property string $p_4
 * @property string $p_5
 * @property string $p_6
 * @property string $p_7
 */
class Table225 extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table_225';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'vendor_id', 'img_100x200'], 'integer'],
            [['vendor_id', 'name', 'name_short', 'product_name', 'imgs'], 'required'],
            [['vendor', 'name', 'name_short', 'product_name', 'p_8', 'p_9', 'p_10', 'p_1', 'p_2', 'p_3', 'p_4', 'p_5', 'p_6', 'p_7'], 'string'],
            [['imgs'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'vendor_id' => 'Vendor ID',
            'vendor' => 'Vendor',
            'name' => 'Name',
            'name_short' => 'Name Short',
            'product_name' => 'Product Name',
            'img_100x200' => 'Img 100x200',
            'imgs' => 'Imgs',
            'p_8' => 'Тип диска',
            'p_9' => 'P 9',
            'p_10' => 'P 10',
            'p_1' => 'P 1',
            'p_2' => 'P 2',
            'p_3' => 'P 3',
            'p_4' => 'P 4',
            'p_5' => 'P 5',
            'p_6' => 'P 6',
            'p_7' => 'P 7',
        ];
    }


}

<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Table168;

/**
 * Table168Search represents the model behind the search form of `app\models\Table168`.
 */
class Table168Search extends Table168
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'vendor_id', 'img_100x200'], 'integer'],
            [['vendor', 'name', 'name_short', 'product_name', 'imgs', 'p_1', 'p_2', 'p_3', 'p_4', 'p_6', 'p_7', 'p_8', 'p_9', 'p_10', 'p_11', 'p_12', 'p_5'], 'safe'],
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
        $query = Table168::find();

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
            'cat_id' => $this->cat_id,
            'vendor_id' => $this->vendor_id,
            'img_100x200' => $this->img_100x200,
        ]);

        $query->andFilterWhere(['like', 'vendor', $this->vendor])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'name_short', $this->name_short])
            ->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'imgs', $this->imgs])
            ->andFilterWhere(['like', 'p_1', $this->p_1])
            ->andFilterWhere(['like', 'p_2', $this->p_2])
            ->andFilterWhere(['like', 'p_3', $this->p_3])
            ->andFilterWhere(['like', 'p_4', $this->p_4])
            ->andFilterWhere(['like', 'p_6', $this->p_6])
            ->andFilterWhere(['like', 'p_7', $this->p_7])
            ->andFilterWhere(['like', 'p_8', $this->p_8])
            ->andFilterWhere(['like', 'p_9', $this->p_9])
            ->andFilterWhere(['like', 'p_10', $this->p_10])
            ->andFilterWhere(['like', 'p_11', $this->p_11])
            ->andFilterWhere(['like', 'p_12', $this->p_12])
            ->andFilterWhere(['like', 'p_5', $this->p_5]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\admin\controllers;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\admin\compatbl;

/**
 * CompatblSearch represents the model behind the search form of `app\models\admin\compatbl`.
 */
class CompatblSearch extends compatbl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'model_cart', 'model_printer'], 'integer'],
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
        $query = compatbl::find();

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
            'model_cart' => $this->model_cart,
            'model_printer' => $this->model_printer,
        ]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\admin\controllers;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\admin\printer;

/**
 * PrinterSearch represents the model behind the search form of `app\models\admin\printer`.
 */
class PrinterSearch extends printer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_printer'], 'integer'],
            [['inventory_id', 'printer_name', 'serv_number'], 'safe'],
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
        $query = printer::find();

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
            'id_printer' => $this->id_printer,
        ]);

        $query->andFilterWhere(['like', 'inventory_id', $this->inventory_id])
            ->andFilterWhere(['like', 'printer_name', $this->printer_name])
            ->andFilterWhere(['like', 'serv_number', $this->serv_number]);

        return $dataProvider;
    }
}

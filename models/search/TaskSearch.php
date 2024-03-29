<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\task;

/**
 * taskSearch represents the model behind the search form of `app\models\task`.
 */
class taskSearch extends task
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'creator_id', 'updater_id', 'created_at', 'updated_at'], 'integer'],
            [['title', 'id_name'], 'safe'],
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
        $query = task::find();

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
            'creator_id' => $this->creator_id,
            'updater_id' => $this->updater_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

    

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'id_name', $this->id_name]);

    
        return $dataProvider;
    }
}

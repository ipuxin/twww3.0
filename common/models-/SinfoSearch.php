<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sinfo;

/**
 * SinfoSearch represents the model behind the search form about `common\models\Sinfo`.
 */
class SinfoSearch extends Sinfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['shopname', 'shoplogo', 'address', 'zhifubaoaccount'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Sinfo::find();

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
            'sid' => $this->sid,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'shopname', $this->shopname])
            ->andFilterWhere(['like', 'shoplogo', $this->shoplogo])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zhifubaoaccount', $this->zhifubaoaccount]);

        return $dataProvider;
    }
}

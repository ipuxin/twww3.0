<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Person;

/**
 * PersonSearch represents the model behind the search form about `common\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'cityname', 'realname', 'mobile', 'email', 'password', 'personid', 'business', 'personpica', 'personpicb', 'person_id_timestar', 'person_id_timeend', 'person_id_andheadpic', 'person_halfbody', 'trademark', 'brand_certificate', 'qc_report', 'qc_other', 'shopname', 'shoplogo', 'address', 'zhifubaoaccount'], 'safe'],
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
        $query = Person::find();

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
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'cityname', $this->cityname])
            ->andFilterWhere(['like', 'realname', $this->realname])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'personid', $this->personid])
            ->andFilterWhere(['like', 'business', $this->business])
            ->andFilterWhere(['like', 'personpica', $this->personpica])
            ->andFilterWhere(['like', 'personpicb', $this->personpicb])
            ->andFilterWhere(['like', 'person_id_timestar', $this->person_id_timestar])
            ->andFilterWhere(['like', 'person_id_timeend', $this->person_id_timeend])
            ->andFilterWhere(['like', 'person_id_andheadpic', $this->person_id_andheadpic])
            ->andFilterWhere(['like', 'person_halfbody', $this->person_halfbody])
            ->andFilterWhere(['like', 'trademark', $this->trademark])
            ->andFilterWhere(['like', 'brand_certificate', $this->brand_certificate])
            ->andFilterWhere(['like', 'qc_report', $this->qc_report])
            ->andFilterWhere(['like', 'qc_other', $this->qc_other])
            ->andFilterWhere(['like', 'shopname', $this->shopname])
            ->andFilterWhere(['like', 'shoplogo', $this->shoplogo])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zhifubaoaccount', $this->zhifubaoaccount]);

        return $dataProvider;
    }
}

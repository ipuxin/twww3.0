<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Seller;

/**
 * SellerSearch represents the model behind the search form about `common\models\Seller`.
 */
class SellerSearch extends Seller
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'cityname', 'realname', 'mobile', 'mail', 'password', 'business', 'legal_person', 'personid', 'person_id_timestar', 'person_id_timeend', 'company', 'company_add', 'company_code', 'company_organization_code', 'company_taxpayer_identification_code', 'company_social_code', 'personpida', 'personpidb', 'company_business_license', 'company_business_license_timestar', 'company_business_license_timeend', 'tax_registration_certificate', 'organization_certificate', 'organization_validity_period', 'organization_validity_period_end', 'address', 'trademark', 'brand_certificate', 'qc_report', 'qc_other', 'shopname', 'shoplogo', 'zhifubaoaccount'], 'safe'],
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
        $query = Seller::find();

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
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'business', $this->business])
            ->andFilterWhere(['like', 'legal_person', $this->legal_person])
            ->andFilterWhere(['like', 'personid', $this->personid])
            ->andFilterWhere(['like', 'person_id_timestar', $this->person_id_timestar])
            ->andFilterWhere(['like', 'person_id_timeend', $this->person_id_timeend])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'company_add', $this->company_add])
            ->andFilterWhere(['like', 'company_code', $this->company_code])
            ->andFilterWhere(['like', 'company_organization_code', $this->company_organization_code])
            ->andFilterWhere(['like', 'company_taxpayer_identification_code', $this->company_taxpayer_identification_code])
            ->andFilterWhere(['like', 'company_social_code', $this->company_social_code])
            ->andFilterWhere(['like', 'personpida', $this->personpida])
            ->andFilterWhere(['like', 'personpidb', $this->personpidb])
            ->andFilterWhere(['like', 'company_business_license', $this->company_business_license])
            ->andFilterWhere(['like', 'company_business_license_timestar', $this->company_business_license_timestar])
            ->andFilterWhere(['like', 'company_business_license_timeend', $this->company_business_license_timeend])
            ->andFilterWhere(['like', 'tax_registration_certificate', $this->tax_registration_certificate])
            ->andFilterWhere(['like', 'organization_certificate', $this->organization_certificate])
            ->andFilterWhere(['like', 'organization_validity_period', $this->organization_validity_period])
            ->andFilterWhere(['like', 'organization_validity_period_end', $this->organization_validity_period_end])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'trademark', $this->trademark])
            ->andFilterWhere(['like', 'brand_certificate', $this->brand_certificate])
            ->andFilterWhere(['like', 'qc_report', $this->qc_report])
            ->andFilterWhere(['like', 'qc_other', $this->qc_other])
            ->andFilterWhere(['like', 'shopname', $this->shopname])
            ->andFilterWhere(['like', 'shoplogo', $this->shoplogo])
            ->andFilterWhere(['like', 'zhifubaoaccount', $this->zhifubaoaccount]);

        return $dataProvider;
    }
}

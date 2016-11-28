<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seller".
 *
 * @property integer $id
 * @property string $username
 * @property string $cityname
 * @property string $realname
 * @property string $mobile
 * @property string $mail
 * @property string $password
 * @property string $business
 * @property string $legal_person
 * @property string $personid
 * @property string $person_id_timestar
 * @property string $person_id_timeend
 * @property string $company
 * @property string $company_add
 * @property string $company_code
 * @property string $company_organization_code
 * @property string $company_taxpayer_identification_code
 * @property string $company_social_code
 * @property string $personpida
 * @property string $personpidb
 * @property string $company_business_license
 * @property string $company_business_license_timestar
 * @property string $company_business_license_timeend
 * @property string $tax_registration_certificate
 * @property string $organization_certificate
 * @property string $organization_validity_period
 * @property string $organization_validity_period_end
 * @property string $address
 * @property string $trademark
 * @property string $brand_certificate
 * @property string $qc_report
 * @property string $qc_other
 * @property string $shopname
 * @property string $shoplogo
 * @property string $zhifubaoaccount
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Seller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'cityname', 'realname', 'mobile', 'mail', 'password', 'business', 'legal_person', 'personid', 'person_id_timestar', 'person_id_timeend', 'company', 'company_add', 'company_code', 'company_organization_code', 'company_taxpayer_identification_code', 'company_social_code', 'personpida', 'personpidb', 'company_business_license', 'company_business_license_timestar', 'company_business_license_timeend', 'tax_registration_certificate', 'organization_certificate', 'organization_validity_period', 'organization_validity_period_end', 'address', 'shopname', 'shoplogo'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'cityname', 'realname', 'mobile', 'mail', 'password', 'business', 'legal_person', 'personid', 'person_id_timestar', 'person_id_timeend', 'company', 'company_add', 'company_code', 'company_organization_code', 'company_taxpayer_identification_code', 'company_social_code', 'personpida', 'personpidb', 'company_business_license', 'company_business_license_timestar', 'company_business_license_timeend', 'tax_registration_certificate', 'organization_certificate', 'organization_validity_period', 'organization_validity_period_end', 'address', 'trademark', 'brand_certificate', 'qc_report', 'qc_other', 'shopname', 'shoplogo', 'zhifubaoaccount'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['mobile'], 'unique'],
            [['mail'], 'unique'],
            [['company'], 'unique'],
            [['company_code'], 'unique'],
//            [['company_social_code'], 'unique'],
            [['shopname'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('shop', 'ID'),
            'username' => Yii::t('shop', 'username'),
            'cityname' => Yii::t('shop', 'cityname'),
            'realname' => Yii::t('shop', 'realname'),
            'mobile' => Yii::t('shop', 'mobile'),
            'mail' => Yii::t('shop', 'mail'),
            'password' => Yii::t('shop', 'password'),
            'business' => Yii::t('shop', 'business'),
            'legal_person' => Yii::t('shop', 'legal_person'),
            'personid' => Yii::t('shop', 'personid'),
            'person_id_timestar' => Yii::t('shop', 'person_id_timestar'),
            'person_id_timeend' => Yii::t('shop', 'person_id_timeend'),
            'company' => Yii::t('shop', 'company'),
            'company_add' => Yii::t('shop', 'company_add'),
            'company_code' => Yii::t('shop', 'company_code'),
            'company_organization_code' => Yii::t('shop', 'company_organization_code'),
            'company_taxpayer_identification_code' => Yii::t('shop', 'company_taxpayer_identification_code'),
            'company_social_code' => Yii::t('shop', 'company_social_code'),
            'personpida' => Yii::t('shop', 'personpida'),
            'personpidb' => Yii::t('shop', 'personpidb'),
            'company_business_license' => Yii::t('shop', 'company_business_license'),
            'company_business_license_timestar' => Yii::t('shop', 'company_business_license_timestar'),
            'company_business_license_timeend' => Yii::t('shop', 'company_business_license_timeend'),
            'tax_registration_certificate' => Yii::t('shop', 'tax_registration_certificate'),
            'organization_certificate' => Yii::t('shop', 'organization_certificate'),
            'organization_validity_period' => Yii::t('shop', 'organization_validity_period'),
            'organization_validity_period_end' => Yii::t('shop', 'organization_validity_period_end'),
            'address' => Yii::t('shop', 'address'),
            'trademark' => Yii::t('shop', 'trademark'),
            'brand_certificate' => Yii::t('shop', 'brand_certificate'),
            'qc_report' => Yii::t('shop', 'qc_report'),
            'qc_other' => Yii::t('shop', 'qc_other'),
            'shopname' => Yii::t('shop', 'shopname'),
            'shoplogo' => Yii::t('shop', 'shoplogo'),
            'zhifubaoaccount' => Yii::t('shop', 'zhifubaoaccount'),
            'status' => Yii::t('shop', 'status'),
            'created_at' => Yii::t('shop', 'created_at'),
            'updated_at' => Yii::t('shop', 'updated_at'),
        ];
    }
    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){
//            $this->username = Yii::$app->user->identity->username;

            if($insert){
                $this->username=$this->mobile;
                $this->created_at=time();
                $this->updated_at=time();
            }
            else
                $this->updated_at=time();
            return   TRUE;
        }  else
            return  FALSE;


    }
}

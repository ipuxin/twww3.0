<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $username
 * @property string $cityname
 * @property string $realname
 * @property string $mobile
 * @property string $email
 * @property string $password
 * @property string $personid
 * @property string $business
 * @property string $personpica
 * @property string $personpicb
 * @property string $person_id_timestar
 * @property string $person_id_timeend
 * @property string $person_id_andheadpic
 * @property string $person_halfbody
 * @property string $trademark
 * @property string $brand_certificate
 * @property string $qc_report
 * @property string $qc_other
 * @property string $shopname
 * @property string $shoplogo
 * @property string $address
 * @property string $zhifubaoaccount
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[  'cityname', 'realname', 'mobile', 'email', 'password', 'personid', 'business', 'personpica', 'personpicb', 'person_id_timestar', 'person_id_timeend', 'person_id_andheadpic', 'person_halfbody', 'trademark', 'brand_certificate', 'qc_report', 'shopname', 'shoplogo', 'address' ], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'cityname', 'realname', 'mobile', 'email', 'password', 'personid', 'business', 'personpica', 'personpicb', 'person_id_timestar', 'person_id_timeend', 'person_id_andheadpic', 'person_halfbody', 'trademark', 'brand_certificate', 'qc_report', 'qc_other', 'shopname', 'shoplogo', 'address', 'zhifubaoaccount'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['personid'], 'unique'],
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
            'email' => Yii::t('shop', 'email'),
            'password' => Yii::t('shop', 'password'),
            'personid' => Yii::t('shop', 'personid'),
            'business' => Yii::t('shop', 'business'),
            'personpica' => Yii::t('shop', 'personpica'),
            'personpicb' => Yii::t('shop', 'personpicb'),
            'person_id_timestar' => Yii::t('shop', 'person_id_timestar'),
            'person_id_timeend' => Yii::t('shop', 'person_id_timeend'),
            'person_id_andheadpic' => Yii::t('shop', 'person_id_andheadpic'),
            'person_halfbody' => Yii::t('shop', 'person_halfbody'),
            'trademark' => Yii::t('shop', 'trademark'),
            'brand_certificate' => Yii::t('shop', 'brand_certificate'),
            'qc_report' => Yii::t('shop', 'qc_report'),
            'qc_other' => Yii::t('shop', 'qc_other'),
            'shopname' => Yii::t('shop', 'shopname'),
            'shoplogo' => Yii::t('shop', 'shoplogo'),
            'address' => Yii::t('shop', 'address'),
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

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pinfo".
 *
 * @property integer $id
 * @property integer $pid
 * @property string $shopname
 * @property string $shoplogo
 * @property string $address
 * @property string $zhifubaoaccount
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Pinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'status',  'updated_at'], 'integer'],
            [['shopname', 'shoplogo', 'address', 'zhifubaoaccount' ], 'required'],
            [['shopname', 'shoplogo', 'address', 'zhifubaoaccount'], 'string', 'max' => 255],
            [['shopname'], 'unique'],
//            [['shoplogo'], 'unique'],
//            [['address'], 'unique'],
//            [['zhifubaoaccount'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('shop', 'ID'),
            'pid' => Yii::t('shop', 'Pid'),
            'shopname' => Yii::t('shop', 'Shopname'),
            'shoplogo' => Yii::t('shop', 'Shoplogo'),
            'address' => Yii::t('shop', 'Address'),
            'zhifubaoaccount' => Yii::t('shop', 'Zhifubaoaccount'),
            'status' => Yii::t('shop', 'status'),
            'created_at' => Yii::t('shop', 'created_at'),
            'updated_at' => Yii::t('shop', 'updated_at'),
        ];
    }

    public  function  beforeSave($insert) {
        if(parent::beforeSave($insert)){


            if($insert){

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

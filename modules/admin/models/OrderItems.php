<?php

namespace app\modules\admin\models;
use yii\db\ActiveRecord;
use Yii;

class OrderItems extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_items';
    }

    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'qty', 'sum', 'name', 'email', 'phone', 'address'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'string'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
            'qty' => 'Quantity',
            'sum' => 'Sum',
            'status' => 'Status',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}

<?php

namespace app\modules\admin\models;
use yii\db\ActiveRecord;
use Yii;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Category Number #',
            'parent_id' => 'Category Parent',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}

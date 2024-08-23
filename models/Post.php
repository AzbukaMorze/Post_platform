<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Inflector;

class Post extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'post';
    }
    public function getCategory(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
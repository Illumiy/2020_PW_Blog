<?php

namespace  app\models;

use yii\db\ActiveRecord;

class Blog extends ActiveRecord //Модель блогов
{
    public static function tableName()
    {
        return 'blog';
    }
}

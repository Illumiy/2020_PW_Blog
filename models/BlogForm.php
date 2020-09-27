<?php

namespace  app\models;

use yii\db\ActiveRecord;

class BlogForm extends ActiveRecord//Модель для формы
{
    public static function tableName()
    {
        return 'blog';
    }

    public function rules()
    {
        return [
            'name' => [['name'], 'string', 'max' => 32], //Ограничение на имя
            [['name', 'text'], 'required'],  //Обязательные строки к заполнению
    }
}
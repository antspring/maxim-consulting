<?php

namespace app\models;

class ConsultationFeedbackForm extends \yii\base\Model
{
    public $name;
    public $tel_number;
    public $city;
    public $question;

    public function rules()
    {
        return [
            [['name', 'tel_number'], 'required'],
            [['name', 'tel_number', 'question', 'city'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'tel_number' => 'Номер телефона',
            'city' => 'Город',
            'question' => 'Вопрос'
        ];
    }
}
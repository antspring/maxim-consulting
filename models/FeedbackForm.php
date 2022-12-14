<?php

namespace app\models;

use himiklab\yii2\recaptcha\ReCaptchaValidator2;

/**
 * This is the model class for table "feedback_form".
 *
 * @property int $id
 * @property string $name
 * @property string $tel_number
 * @property string|null $email
 * @property string|null $question
 */
class FeedbackForm extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'tel_number'], 'required'],
            [['name', 'tel_number', 'email', 'question'], 'string', 'max' => 255],
            [['email'], 'email'],
            [
                ['reCaptcha'],
                ReCaptchaValidator2::class,
                'uncheckedMessage' => 'Please confirm that you are not a bot.'
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'tel_number' => 'Номер телефона',
            'email' => 'Почта',
            'question' => 'Вопрос',
        ];
    }
}

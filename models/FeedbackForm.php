<?php

namespace app\models;

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
            [['email'], 'email']
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

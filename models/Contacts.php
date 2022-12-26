<?php

namespace app\models;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string|null $address
 * @property string|null $time
 * @property string|null $tel_number
 * @property string|null $email
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'time', 'tel_number', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Адрес',
            'time' => 'Время работы',
            'tel_number' => 'Номер телефона',
            'email' => 'Email',
        ];
    }
}

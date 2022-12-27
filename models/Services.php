<?php

namespace app\models;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $icon
 * @property string|null $subheading
 * @property string|null $text
 * @property int|null $category
 * @property array|null $categories
 */
class Services extends \yii\db\ActiveRecord
{
    const FOR_INDIVIDUALS = 1;
    const FOR_LEGAL_ENTITIES = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'icon'], 'string'],
            [['category'], 'integer'],
            [['title', 'subheading'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'icon' => 'Иконка',
            'subheading' => 'Подзаголовок',
            'text' => 'Текст',
            'category' => 'Категория',
        ];
    }

    public static function getCategories()
    {
        return [
            self::FOR_INDIVIDUALS => 'Для частных лиц',
            self::FOR_LEGAL_ENTITIES => 'Для бизнеса'
        ];
    }

    public function getCategoryText()
    {
        return $this->categories[$this->category];
    }
}

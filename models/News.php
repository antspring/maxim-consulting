<?php

namespace app\models;

use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 * @var UploadedFile $imageFile
 * @property string|null $text
 * @property int|null $category_id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $categories
 * @property string|null $categoryText
 *
 * @property Categories $category
 */
class News extends \yii\db\ActiveRecord
{
    const NEWS = 1;
    const LAWYER = 2;
    const CASE = 3;

    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => \yii\behaviors\TimestampBehavior::className(),
                'attributes' => [
                    \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new \yii\db\Expression('NOW()'),
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['category_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
            [['imageFile'], 'file'],
            [
                ['category_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Categories::class,
                'targetAttribute' => ['category_id' => 'id']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'image' => 'Изображение',
            'text' => 'Текст',
            'category_id' => 'Категория',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }

    public function upload()
    {
        $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);

        $this->image = 'uploads/' . $this->imageFile->name;
    }

    public static function getCategories()
    {
        return [
            self::NEWS => 'Новости',
            self::LAWYER => 'Спроси юриста',
            self::CASE => 'Наши кейсы'
        ];
    }

    public function getCategoryText()
    {
        return $this->categories[$this->category_id];
    }
}

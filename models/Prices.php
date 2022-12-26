<?php

namespace app\models;

/**
 * This is the model class for table "prices".
 *
 * @property int $id
 * @property int|null $category_price_id
 * @property int|null $category
 * @property string|null $title
 * @property string|null $description
 * @property int|null $price
 * @property array|null $categoriesPrice
 * @property array|null $categories
 *
 * @property ServicePriceCategories $categoryPrice
 */
class Prices extends \yii\db\ActiveRecord
{
    const CIVIL = 1;
    const ADMINISTRATIVE = 2;
    const CAS = 3;
    const CONSULTING = 4;
    const FOR_INDIVIDUALS = 1;
    const FOR_LEGAL_ENTITIES = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_price_id', 'category', 'price'], 'integer'],
            [['title', 'description'], 'string', 'max' => 255],
            [
                ['category_price_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => ServicePriceCategories::class,
                'targetAttribute' => ['category_price_id' => 'id']
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
            'category_price_id' => 'Категория цен на услуги',
            'category' => 'Категория',
            'title' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[CategoryPrice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoryPrice()
    {
        return $this->hasOne(ServicePriceCategories::class, ['id' => 'category_price_id']);
    }

    public static function getCategoriesPrice()
    {
        return [
            self::CIVIL => 'По гражданским делам',
            self::ADMINISTRATIVE => 'По административным делам',
            self::CAS => 'По делам в соответствии с КАС РФ',
            self::CONSULTING => 'Консалтинг, договоры, правовые документы и пр.'
        ];
    }

    public function getCategoryPriceText()
    {
        return $this->categoriesPrice[$this->category_price_id];
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

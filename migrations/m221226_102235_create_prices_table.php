<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%prices}}`.
 */
class m221226_102235_create_prices_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%prices}}', [
            'id' => $this->primaryKey(),
            'category_price_id' => $this->integer(),
            'category' => $this->integer(),
            'title' => $this->string(),
            'description' => $this->string()->null(),
            'price' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk_prices_category_price_id',
            'prices',
            'category_price_id',
            'service_price_categories',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_prices_category_price_id', 'prices');
        $this->dropTable('{{%prices}}');
    }
}

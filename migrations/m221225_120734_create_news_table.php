<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m221225_120734_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->string(),
            'text' => $this->text(),
            'category_id' => $this->integer(),
            'created_at' => $this->date(),
            'updated_at' => $this->date()
        ]);

        $this->addForeignKey(
            'fk-news-category_id',
            'news',
            'category_id',
            'categories',
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
        $this->dropForeignKey('fk-news-category_id', 'news');
        $this->dropTable('{{%news}}');
    }
}

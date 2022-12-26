<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service_price_categories}}`.
 */
class m221226_102058_create_service_price_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service_price_categories}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service_price_categories}}');
    }
}

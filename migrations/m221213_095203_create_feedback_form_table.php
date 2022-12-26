<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback_form}}`.
 */
class m221213_095203_create_feedback_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feedback_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'tel_number' => $this->string()->notNull(),
            'email' => $this->string()->null(),
            'question' => $this->string()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feedback_form}}');
    }
}

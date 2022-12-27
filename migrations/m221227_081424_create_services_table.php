<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m221227_081424_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'icon' => $this->text(),
            'subheading' => $this->string(),
            'text' => $this->text(),
            'category' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%services}}');
    }
}

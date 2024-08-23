<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m240823_152227_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey()->unsigned()->notNull()->append('AUTO_INCREMENT'),
            'title' => $this->string(255)->notNull(),
            'alias' => $this->string(255)->notNull(),
        ]);

        // Создание индекса для поля "alias"
        $this->createIndex(
            'idx-category-alias',
            'category',
            'alias'
        );
    }

    public function safeDown()
    {
        // Удаление индекса
        $this->dropIndex('idx-category-alias', 'category');

        // Удаление таблицы
        $this->dropTable('category');
    }
}


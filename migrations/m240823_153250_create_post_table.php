<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m240823_153250_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey()->unsigned()->notNull()->append('AUTO_INCREMENT'),
            'category_id' => $this->integer()->unsigned()->notNull(),
            'title' => $this->string(255)->notNull(),
            'excerpt' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'img' => $this->string(255)->null(),
            'created_at' => $this->dateTime()->notNull(),
            'keywords' => $this->string(255)->null(),
            'description' => $this->string(255)->null(),
        ]);

        // Создание индекса для поля category_id
        $this->createIndex(
            'idx-post-category_id',
            'post',
            'category_id'
        );
    }

    public function safeDown()
    {
        // Удаление индекса
        $this->dropIndex('idx-post-category_id', 'post');

        // Удаление таблицы
        $this->dropTable('post');
    }
}

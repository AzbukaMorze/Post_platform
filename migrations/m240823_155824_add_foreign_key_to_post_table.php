<?php

use yii\db\Migration;

/**
 * Class m240823_155824_add_foreign_key_to_post_table
 */
class m240823_155824_add_foreign_key_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Создание внешнего ключа для таблицы post
        $this->addForeignKey(
            'fk-post-category',  // имя внешнего ключа
            'post',              // имя таблицы, в которую добавляется внешний ключ
            'category_id',       // имя поля, которое будет являться внешним ключом
            'category',          // имя таблицы, на которую ссылается внешний ключ
            'id',                // имя поля в таблице category, на которое ссылается внешний ключ
            'CASCADE',           // действия при удалении записи в таблице category
            'CASCADE'            // действия при обновлении записи в таблице category
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Удаление внешнего ключа
        $this->dropForeignKey(
            'fk-post-category',  // имя внешнего ключа
            'post'               // имя таблицы, из которой удаляется внешний ключ
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240823_155824_add_foreign_key_to_post_table cannot be reverted.\n";

        return false;
    }
    */
}

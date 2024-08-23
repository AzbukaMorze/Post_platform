<?php

use yii\db\Migration;

/**
 * Class m240823_154116_insert_data_into_category_table
 */
class m240823_154116_insert_data_into_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Вставка данных в таблицу `category`
        $this->batchInsert('category',
            ['id', 'title', 'alias'],
            [
                [1, 'Technology', 'technology'],
                [2, 'Health & Wellness', 'health-wellness'],
                [3, 'Travel', 'travel'],
                [4, 'Lifestyle', 'lifestyle'],
            ]
        );
    }

    public function safeDown()
    {
        // Удаление данных из таблицы `category`
        $this->delete('category', ['id' => [1, 2, 3, 4]]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240823_154116_insert_data_into_category_table cannot be reverted.\n";

        return false;
    }
    */
}

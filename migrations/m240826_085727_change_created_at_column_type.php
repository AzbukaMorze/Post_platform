<?php

use yii\db\Migration;

/**
 * Class m240826_085727_change_created_at_column_type
 */
class m240826_085727_change_created_at_column_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('post', 'created_at_temp', $this->integer()->notNull());

        $this->execute('UPDATE post SET created_at_temp = UNIX_TIMESTAMP(created_at)');

        $this->dropColumn('post', 'created_at');

        $this->renameColumn('post', 'created_at_temp', 'created_at');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('post', 'created_at', $this->datetime()->notNull());

        $this->execute('UPDATE post SET created_at = FROM_UNIXTIME(created_at)');

        $this->dropColumn('post', 'created_at_temp');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240826_085727_change_created_at_column_type cannot be reverted.\n";

        return false;
    }
    */
}

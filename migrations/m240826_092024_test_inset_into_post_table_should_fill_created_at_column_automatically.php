<?php

use yii\db\Migration;
use app\models\Post;

/**
 * Class m240826_092024_test_inset_into_post_table_should_fill_created_at_column_automatically
 */
class m240826_092024_test_inset_into_post_table_should_fill_created_at_column_automatically extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $post1 = new Post();
        $post1->category_id = 1;
        $post1->title = 'First Post via Migration';
        $post1->excerpt = 'First Post Excerpt';
        $post1->content = 'First Post Content';
        $post1->save();

        $post2 = new Post();
        $post2->category_id = 2;
        $post2->title = 'Second Post via Migration';
        $post2->excerpt = 'Second Post Excerpt';
        $post2->content = 'Second Post Content';
        $post2->save();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Post::deleteAll(['title' => ['First Post via Migration', 'Second Post via Migration']]);
    }
}

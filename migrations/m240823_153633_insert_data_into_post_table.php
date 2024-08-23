<?php

use yii\db\Migration;

/**
 * Class m240823_153633_insert_data_into_post_table
 */
class m240823_153633_insert_data_into_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Вставка данных в таблицу `post`
        $this->batchInsert('post',
            ['id', 'category_id', 'title', 'excerpt', 'content', 'img', 'created_at', 'keywords', 'description'],
            [
                [1, 1, 'The Rise of Artificial Intelligence', 'Exploring the advancements in AI technology.', 'Artificial Intelligence (AI) is transforming various industries, from healthcare to finance. This post explores the recent advancements in AI technology and its impact on the future.', 'ai-technology.jpg', '2024-08-22 10:00:00', 'AI, technology, advancements', 'An overview of how AI is evolving and changing industries.'],
                [2, 2, 'The Importance of Mental Health', 'Why mental health should be a priority.', 'Mental health is as important as physical health. This post discusses the significance of mental health and offers tips on how to maintain mental well-being.', 'mental-health.jpg', '2024-08-21 12:30:00', 'mental health, well-being, self-care', 'A guide to understanding and improving mental health.'],
                [3, 3, 'Top 10 Destinations for 2024', 'Discover the must-visit places for your next trip.', 'Planning a trip in 2024? Check out our list of the top 10 travel destinations that you must visit this year. From exotic beaches to cultural hubs, find your next adventure.', 'travel-destinations.jpg', '2024-08-20 09:15:00', 'travel, destinations, 2024', 'Top travel spots for the upcoming year.'],
                [4, 4, '10 Tips for a Healthier Lifestyle', 'Simple changes to improve your daily life.', 'Looking to live a healthier life? This post provides 10 easy-to-follow tips for making positive changes to your daily routine and improving your overall well-being.', 'healthy-lifestyle.jpg', '2024-08-19 14:45:00', 'lifestyle, health, wellness', 'Tips for achieving a healthier lifestyle with practical advice.'],
                [5, 1, 'Innovations in Renewable Energy', 'How renewable energy is shaping the future.', 'Renewable energy sources are becoming more efficient and widely adopted. This post delves into the latest innovations in renewable energy and their potential to reduce global dependence on fossil fuels.', 'renewable-energy.jpg', '2024-08-23 11:00:00', 'renewable energy, innovations, sustainability', 'Exploring the latest advancements in renewable energy technologies.'],
                [6, 2, 'Understanding Nutrition Labels', 'How to read and interpret nutrition information.', 'Nutrition labels can be confusing. This post provides a clear guide on how to read and understand nutrition labels to make healthier food choices.', 'nutrition-labels.jpg', '2024-08-24 13:30:00', 'nutrition, food labels, healthy eating', 'A comprehensive guide to interpreting nutrition labels for better health.'],
                [7, 3, 'Hidden Gems: Underrated Travel Spots', 'Explore lesser-known travel destinations.', 'Discover some of the world’s hidden gems that are often overlooked by travelers. This post highlights underrated travel spots that offer unique experiences away from the crowds.', 'hidden-gems.jpg', '2024-08-25 15:00:00', 'travel, hidden gems, off-the-beaten-path', 'Uncover lesser-known travel destinations with unique attractions.'],
                [8, 4, 'The Benefits of Daily Exercise', 'Why you should incorporate exercise into your routine.', 'Regular exercise has numerous benefits beyond just physical health. This post discusses the mental and emotional benefits of daily exercise and offers tips for staying motivated.', 'daily-exercise.jpg', '2024-08-26 16:00:00', 'exercise, fitness, health benefits', 'Understanding the full range of benefits from daily exercise and how to stay motivated.'],
            ]
        );
    }

    public function safeDown()
    {
        // Удаление данных из таблицы `post`
        $this->delete('post', ['id' => [1, 2, 3, 4, 5, 6, 7, 8]]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240823_153633_insert_data_into_post_table cannot be reverted.\n";

        return false;
    }
    */
}

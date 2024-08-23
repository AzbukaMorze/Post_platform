<?php

/** @var yii\web\View $this */
/** @var app\models\Post $post */

use yii\helpers\Html;

$this->title = $post->title;
?>

<h1><?= Html::encode($post->title) ?></h1>

<div class="post-details">
    <p><strong>Краткое описание:</strong> <?= Html::encode($post->excerpt) ?></p>
    <p><strong>Содержание:</strong></p>
    <div class="post-content">
        <?= Html::encode($post->content) ?>
    </div>

    <p><strong>Изображение:</strong> <?= Html::img("@web/{$post->img}", ['alt' => $post->title]) ?></p>

    <p><strong>Дата создания:</strong> <?= Yii::$app->formatter->asDatetime($post->created_at, 'php:d M Y H:i') ?></p>

    <p><strong>Ключевые слова:</strong> <?= Html::encode($post->keywords) ?></p>

    <p><strong>Описание:</strong> <?= Html::encode($post->description) ?></p>
</div>

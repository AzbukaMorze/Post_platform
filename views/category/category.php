<?php

/** @var yii\web\View $this */
/** @var app\models\Category $category */
/** @var app\models\Post[] $posts */
/** @var yii\data\Pagination $pages */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = $category->title;

?>

<h1><?= Html::encode($category->title) ?></h1>

<?php if (!empty($posts)): ?>
    <div class="post-list">
        <?php foreach ($posts as $post): ?>
            <div class="post-item">
                <h3><?= Html::a(Html::encode($post->title), ['post/view', 'id' => $post->id]) ?></h3>
                <p><?= Html::encode($post->excerpt) ?></p>
                <small>Дата создания: <?= Yii::$app->formatter->asDatetime($post->created_at, 'php:d M Y H:i') ?></small>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Пагинация -->
    <div class="pagination-container">
        <?= LinkPager::widget([
            'pagination' => $pages,
        ]) ?>
    </div>
<?php else: ?>
    <p style="text-align: center;">В этой категории пока нет постов.</p>
<?php endif; ?>

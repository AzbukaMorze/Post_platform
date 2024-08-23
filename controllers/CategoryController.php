<?php

namespace app\controllers;

use app\models\Category;
use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
    /**
     * @throws NotFoundHttpException
     */
    public function actionView($alias): string
    {

        $category = Category::findOne(['alias' => $alias]);

        if ($category === null) {
            throw new \yii\web\NotFoundHttpException('Категория не найдена.');
        }

        $query = Post::find()->where(['category_id' => $category->id]);

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 1,
            'pageSizeParam' => false,
            'forcePageParam' => false
        ]);

        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('category', compact('category', 'posts', 'pages'));
    }
}

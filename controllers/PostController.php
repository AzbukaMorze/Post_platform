<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PostController extends Controller
{
    public function actionIndex(): string
    {
//      $posts = Post::find()-> all();
        $query = Post::find() ->with('category');
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
            'pageSizeParam' => false,
            'forcePageParam' => false
        ]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render(
            'index',
            compact(
                'posts',
                'pages'
            )
        );
    }
    public function actionView($id): string
    {
        $post = Post::findOne($id);

        if ($post === null) {
            throw new NotFoundHttpException('Пост не найден.');
        }
        
        return $this->render('post', compact('post'));
    }

}
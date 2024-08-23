<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex(): string
    {
//        $posts = Post::find()-> all();
        $query = Post::find() ->with('category');
        $pages = new Pagination(['totalCount' => $query -> count(), 'pageSize' => 4]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('posts', 'pages'));
    }

}
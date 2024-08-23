<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionIndex(): string
    {
        $posts = Post::find()-> all();
        return $this->render('index', compact('posts'));
    }
}
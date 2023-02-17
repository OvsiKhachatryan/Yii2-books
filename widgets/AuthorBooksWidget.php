<?php

namespace app\widgets;

use app\models\Author;
use yii\base\Widget;
use yii\helpers\Html;

class AuthorBooksWidget extends Widget
{
    public Author $author;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $this->author->getBooks(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('@app/widgets/AuthorBooksWidgetView', ["dataProvider" => $dataProvider]);
    }
}
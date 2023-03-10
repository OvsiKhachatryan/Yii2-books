<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string|null $name
 */
class Book extends \yii\db\ActiveRecord
{
    public $authorIds;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 20],
            ['authorIds', 'each', 'rule' => ['integer']]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getAuthors()
    {
        return $this->hasMany(Author::class, ['id' => 'author_id'])
            ->via('bookAuthors');
    }

    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthor::class, ['book_id' => 'id']);
    }
}


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
        return $this->hasMany(Author::className(), ['id' => 'author_id'])
            ->viaTable('books_authors', ['book_id' => 'id']);
    }
}


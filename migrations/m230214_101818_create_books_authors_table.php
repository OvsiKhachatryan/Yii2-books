<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books_authors}}`.
 */
class m230214_101818_create_books_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books_authors}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->bigInteger()->unsigned(),
            'author_id' => $this->bigInteger()->unsigned()
        ]);

        $this->addForeignKey(
            'fk-book_authors-book_id',
            'books_authors',
            'book_id',
            'books',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-book_authors-author_id',
            'books_authors',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books_authors}}');
    }
}

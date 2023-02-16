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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books_authors}}');
    }
}

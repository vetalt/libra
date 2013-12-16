<?php

class m131216_023102_books_tables extends CDbMigration {

    public function up() {
        $this->execute("
            CREATE TABLE `books` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `title` varchar(255) NOT NULL,
              `author_id` int(10) unsigned NOT NULL COMMENT 'authors.id',
              PRIMARY KEY (`id`),
              UNIQUE KEY `title_UNIQUE` (`title`),
              KEY `fk_books_1_idx` (`author_id`),
              CONSTRAINT `fk_books_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`)
            ) ENGINE=InnoDB
            ");
        $this->execute("
            CREATE TABLE `book_texts` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `book_id` int(10) unsigned NOT NULL COMMENT 'books.id',
              `title` varchar(255) NOT NULL,
              `text` text NOT NULL,
              `lang` varchar(45) NOT NULL,
              `published` date NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE KEY `title_UNIQUE` (`title`),
              KEY `fk_book_texts_1_idx` (`book_id`),
              CONSTRAINT `fk_book_texts_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
            ) ENGINE=InnoDB
            ");
    }

    public function down() {
        echo "m131216_023102_books_tables does not support migration down.\n";
        return false;
    }

}

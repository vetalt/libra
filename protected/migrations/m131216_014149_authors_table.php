<?php

class m131216_014149_authors_table extends CDbMigration {

    public function up() {
        $this->execute("
            CREATE TABLE `authors` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(255) NOT NULL,
              `birth` year DEFAULT NULL,
              `death` year DEFAULT NULL,
              `country` varchar(255) DEFAULT NULL,
              `biography` text,
              PRIMARY KEY (`id`),
              UNIQUE KEY `name_UNIQUE` (`name`)
            ) ENGINE=InnoDB;
            ");
    }

    public function down() {
        echo "m131216_014149_authors_table does not support migration down.\n";
        return false;
    }

}

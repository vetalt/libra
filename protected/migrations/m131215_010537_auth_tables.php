<?php

class m131215_010537_auth_tables extends CDbMigration {

    public function up() {
        $this->execute("
drop table if exists `AuthAssignment`;
drop table if exists `AuthItemChild`;
drop table if exists `AuthItem`;

create table `AuthItem`
(
   `name`                 varchar(64) not null,
   `type`                 integer not null,
   `description`          text,
   `bizrule`              text,
   `data`                 text,
   primary key (`name`)
) engine InnoDB;

create table `AuthItemChild`
(
   `parent`               varchar(64) not null,
   `child`                varchar(64) not null,
   primary key (`parent`,`child`),
   foreign key (`parent`) references `AuthItem` (`name`) on delete cascade on update cascade,
   foreign key (`child`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;

create table `AuthAssignment`
(
   `itemname`             varchar(64) not null,
   `userid`               varchar(64) not null,
   `bizrule`              text,
   `data`                 text,
   primary key (`itemname`,`userid`),
   foreign key (`itemname`) references `AuthItem` (`name`) on delete cascade on update cascade
) engine InnoDB;
            ");
        
        $this->execute("INSERT INTO `AuthItem` (name, type) VALUES ('admin',2),('librarian',2),('visitor',2);");
        
        $this->execute("INSERT INTO `AuthAssignment` (itemname, userid) VALUES ('admin',1);"); // first registered user gets admin role
    }

    public function down() {
        echo "m131215_010537_auth_tables does not support migration down.\n";
        return false;
    }

}

<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161112224917 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Art');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('English');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Geography');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('History');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Math');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Music');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Physical Education');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Religion');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Science');");
        $this->addSql("INSERT INTO subject (subject_name) VALUES('Social Studies');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS=0;');
        $this->addSql('TRUNCATE subject');
        $this->addSql('SET FOREIGN_KEY_CHECKS=1;');
    }
}

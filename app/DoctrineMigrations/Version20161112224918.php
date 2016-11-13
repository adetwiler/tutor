<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161112224918 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('Biff Tannen', 85003);");
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('Emmett Brown', 85003);");
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('George McFly', 85001);");
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('Jennifer Parker', 85002);");
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('Lorraine Baine', 85001);");
        $this->addSql("INSERT INTO tutor (full_name, zip_code) VALUES('Marty McFly', 85002);");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS=0;');
        $this->addSql('TRUNCATE tutor');
        $this->addSql('SET FOREIGN_KEY_CHECKS=1;');
    }
}

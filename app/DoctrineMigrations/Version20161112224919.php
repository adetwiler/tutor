<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161112224919 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS=0;');
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(1, 6)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(1, 1)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(2, 2)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(2, 4)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(3, 5)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(3, 3)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(4, 2)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(4, 6)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(5, 1)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(5, 3)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(6, 5)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(6, 4)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(7, 3)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(7, 1)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(8, 1)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(8, 6)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(9, 4)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(9, 5)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(10, 2)");
        $this->addSql("INSERT INTO tutor_subjects (subject_id, tutor_id) VALUES(10, 4)");
        $this->addSql('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('SET FOREIGN_KEY_CHECKS=0;');
        $this->addSql('TRUNCATE tutor_subjects');
        $this->addSql('SET FOREIGN_KEY_CHECKS=1;');
    }
}

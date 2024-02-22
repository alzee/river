<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222102418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE seed_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE seed (id INT NOT NULL, pattern_id INT NOT NULL, date VARCHAR(255) NOT NULL, nong_yi_ji_shu VARCHAR(255) DEFAULT NULL, wu_li_jie_gou_gai_shan VARCHAR(255) DEFAULT NULL, cuo_shi3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_4487E306F734A20F ON seed (pattern_id)');
        $this->addSql('ALTER TABLE seed ADD CONSTRAINT FK_4487E306F734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE seed_id_seq CASCADE');
        $this->addSql('ALTER TABLE seed DROP CONSTRAINT FK_4487E306F734A20F');
        $this->addSql('DROP TABLE seed');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222102005 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE fertilizer_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE fertilizer (id INT NOT NULL, pattern_id INT NOT NULL, date VARCHAR(255) NOT NULL, cuo_shi1 VARCHAR(255) DEFAULT NULL, shi_yong_liang1 VARCHAR(255) DEFAULT NULL, cuo_shi2 VARCHAR(255) DEFAULT NULL, shi_yong_liang2 VARCHAR(255) DEFAULT NULL, cuo_shi3 VARCHAR(255) DEFAULT NULL, shi_yong_liang3 VARCHAR(255) DEFAULT NULL, cuo_shi4 VARCHAR(255) DEFAULT NULL, shi_yong_liang4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1525A45CF734A20F ON fertilizer (pattern_id)');
        $this->addSql('ALTER TABLE fertilizer ADD CONSTRAINT FK_1525A45CF734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE fertilizer_id_seq CASCADE');
        $this->addSql('ALTER TABLE fertilizer DROP CONSTRAINT FK_1525A45CF734A20F');
        $this->addSql('DROP TABLE fertilizer');
    }
}

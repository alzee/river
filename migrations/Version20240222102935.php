<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222102935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE tracking_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tracking (id INT NOT NULL, pattern_id INT NOT NULL, fang_fa_she_bei VARCHAR(255) DEFAULT NULL, jian_ce_pin_ci VARCHAR(255) DEFAULT NULL, xian_di_yuan_cheng VARCHAR(255) DEFAULT NULL, jian_ce_zhuan_ti VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A87C621CF734A20F ON tracking (pattern_id)');
        $this->addSql('ALTER TABLE tracking ADD CONSTRAINT FK_A87C621CF734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE tracking_id_seq CASCADE');
        $this->addSql('ALTER TABLE tracking DROP CONSTRAINT FK_A87C621CF734A20F');
        $this->addSql('DROP TABLE tracking');
    }
}

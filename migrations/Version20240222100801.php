<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222100801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE irrigation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE irrigation (id INT NOT NULL, pattern_id INT NOT NULL, date VARCHAR(255) NOT NULL, guan_shui_liang VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BAE1AE08F734A20F ON irrigation (pattern_id)');
        $this->addSql('ALTER TABLE irrigation ADD CONSTRAINT FK_BAE1AE08F734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE irrigation_id_seq CASCADE');
        $this->addSql('ALTER TABLE irrigation DROP CONSTRAINT FK_BAE1AE08F734A20F');
        $this->addSql('DROP TABLE irrigation');
    }
}

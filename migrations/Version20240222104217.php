<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222104217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cost_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cost (id INT NOT NULL, pattern_id INT NOT NULL, nei_rong VARCHAR(255) DEFAULT NULL, zong_liang VARCHAR(255) DEFAULT NULL, zong_jia DOUBLE PRECISION DEFAULT NULL, dan_jia DOUBLE PRECISION DEFAULT NULL, dan_wei VARCHAR(255) DEFAULT NULL, fang_fa VARCHAR(255) DEFAULT NULL, shi_yong_liang DOUBLE PRECISION DEFAULT NULL, chan_liang DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_182694FCF734A20F ON cost (pattern_id)');
        $this->addSql('ALTER TABLE cost ADD CONSTRAINT FK_182694FCF734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cost_id_seq CASCADE');
        $this->addSql('ALTER TABLE cost DROP CONSTRAINT FK_182694FCF734A20F');
        $this->addSql('DROP TABLE cost');
    }
}

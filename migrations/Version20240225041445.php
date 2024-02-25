<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225041445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cost ADD type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE fertilizer ADD type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE irrigation ADD type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE seed ADD type VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE irrigation DROP type');
        $this->addSql('ALTER TABLE seed DROP type');
        $this->addSql('ALTER TABLE fertilizer DROP type');
        $this->addSql('ALTER TABLE cost DROP type');
    }
}

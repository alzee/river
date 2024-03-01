<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301025447 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pattern ADD xiao_zhang_cuo_shi VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD zeng_tan_pei_fei VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD nong_yi_zhi_bao VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD yu_qi_zong_chan INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pattern DROP xiao_zhang_cuo_shi');
        $this->addSql('ALTER TABLE pattern DROP zeng_tan_pei_fei');
        $this->addSql('ALTER TABLE pattern DROP nong_yi_zhi_bao');
        $this->addSql('ALTER TABLE pattern DROP yu_qi_zong_chan');
    }
}

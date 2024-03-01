<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301055016 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pattern ADD guan_pai_xie_tong_shen_he VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD xiao_zhang_pei_fei_shen_he VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD zhong_zi_nong_yi_shen_he VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD gen_zong_jian_ce_shen_he VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD ji_shu_mo_shi_shen_he VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD cai_wu_yu_suan_shen_he VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pattern DROP guan_pai_xie_tong_shen_he');
        $this->addSql('ALTER TABLE pattern DROP xiao_zhang_pei_fei_shen_he');
        $this->addSql('ALTER TABLE pattern DROP zhong_zi_nong_yi_shen_he');
        $this->addSql('ALTER TABLE pattern DROP gen_zong_jian_ce_shen_he');
        $this->addSql('ALTER TABLE pattern DROP ji_shu_mo_shi_shen_he');
        $this->addSql('ALTER TABLE pattern DROP cai_wu_yu_suan_shen_he');
    }
}

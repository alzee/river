<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228025306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pattern ADD zhong_shi_mian_ji INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD zhu_ze_zhuan_ti INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD she_ji_zong_tou_ru DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD he_suan_zong_tou_ru DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD mu_jun_tou_ru INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD mu_jun_chan_chu INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD chan_tou_bi DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pattern DROP zhong_shi_mian_ji');
        $this->addSql('ALTER TABLE pattern DROP zhu_ze_zhuan_ti');
        $this->addSql('ALTER TABLE pattern DROP she_ji_zong_tou_ru');
        $this->addSql('ALTER TABLE pattern DROP he_suan_zong_tou_ru');
        $this->addSql('ALTER TABLE pattern DROP mu_jun_tou_ru');
        $this->addSql('ALTER TABLE pattern DROP mu_jun_chan_chu');
        $this->addSql('ALTER TABLE pattern DROP chan_tou_bi');
    }
}

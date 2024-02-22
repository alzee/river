<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222094833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE soil_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE soil (id INT NOT NULL, pattern_id INT DEFAULT NULL, nian_fen_sha VARCHAR(255) DEFAULT NULL, tu_rang_zhi_di VARCHAR(255) DEFAULT NULL, gan_rong_liang DOUBLE PRECISION DEFAULT NULL, kong_xi_du DOUBLE PRECISION DEFAULT NULL, quan_dan DOUBLE PRECISION DEFAULT NULL, quan_lin DOUBLE PRECISION DEFAULT NULL, quan_jia DOUBLE PRECISION DEFAULT NULL, you_ji_zhi DOUBLE PRECISION DEFAULT NULL, xiao_tai_dan DOUBLE PRECISION DEFAULT NULL, an_tai_dan DOUBLE PRECISION DEFAULT NULL, you_xiao_lin DOUBLE PRECISION DEFAULT NULL, you_xiao_jia DOUBLE PRECISION DEFAULT NULL, jian_jie_dan DOUBLE PRECISION DEFAULT NULL, quan_yan_liang DOUBLE PRECISION DEFAULT NULL, ec DOUBLE PRECISION DEFAULT NULL, ph DOUBLE PRECISION DEFAULT NULL, bao_he_han_shui_lv DOUBLE PRECISION DEFAULT NULL, bao_he_dao_shui_lv DOUBLE PRECISION DEFAULT NULL, tian_jian_chi_shui_liang DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EB7EA1EEF734A20F ON soil (pattern_id)');
        $this->addSql('ALTER TABLE soil ADD CONSTRAINT FK_EB7EA1EEF734A20F FOREIGN KEY (pattern_id) REFERENCES pattern (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE soil_id_seq CASCADE');
        $this->addSql('ALTER TABLE soil DROP CONSTRAINT FK_EB7EA1EEF734A20F');
        $this->addSql('DROP TABLE soil');
    }
}

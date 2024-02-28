<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240228024848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pattern ADD guan_gai_ci_shu SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD zong_guan_shui_liang INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD pai_shui_fang_shi VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD pai_shui_mai_shen DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD pai_shui_jian_ju INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD hui_yong_neng_li INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pattern ADD hui_yong_kong_zhi_shui_zhi DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pattern DROP guan_gai_ci_shu');
        $this->addSql('ALTER TABLE pattern DROP zong_guan_shui_liang');
        $this->addSql('ALTER TABLE pattern DROP pai_shui_fang_shi');
        $this->addSql('ALTER TABLE pattern DROP pai_shui_mai_shen');
        $this->addSql('ALTER TABLE pattern DROP pai_shui_jian_ju');
        $this->addSql('ALTER TABLE pattern DROP hui_yong_neng_li');
        $this->addSql('ALTER TABLE pattern DROP hui_yong_kong_zhi_shui_zhi');
    }
}

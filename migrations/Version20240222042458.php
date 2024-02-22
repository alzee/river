<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222042458 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE pattern_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE pattern (id INT NOT NULL, name VARCHAR(255) NOT NULL, location VARCHAR(255) DEFAULT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, area INT DEFAULT NULL, tu_rang_zhi_di VARCHAR(255) DEFAULT NULL, yan_jian_cheng_du VARCHAR(255) DEFAULT NULL, di_li_deng_ji VARCHAR(255) DEFAULT NULL, yan_jian_cheng_yin VARCHAR(255) DEFAULT NULL, zhu_yao_zhang_ai VARCHAR(255) DEFAULT NULL, zhong_zhi_zuo_wu VARCHAR(255) DEFAULT NULL, guan_gai_xie_tong VARCHAR(255) DEFAULT NULL, xiao_zhang_pei_fei VARCHAR(255) DEFAULT NULL, zhong_zi_nong_yi VARCHAR(255) DEFAULT NULL, gen_zong_jian_ce TEXT DEFAULT NULL, mo_shi_dan_jia DOUBLE PRECISION DEFAULT NULL, mo_shi_zong_jia DOUBLE PRECISION DEFAULT NULL, zhong_shi_dan_chan DOUBLE PRECISION DEFAULT NULL, guan_gai_ding_e DOUBLE PRECISION DEFAULT NULL, yan_jian_xia_jiang DOUBLE PRECISION DEFAULT NULL, di_li_ti_sheng DOUBLE PRECISION DEFAULT NULL, dan_chan_ti_sheng VARCHAR(255) DEFAULT NULL, shui_xiao_ti_sheng DOUBLE PRECISION DEFAULT NULL, yan_zheng_zhuan_ti DOUBLE PRECISION DEFAULT NULL, zhuan_ti_fu_ze_ren VARCHAR(255) DEFAULT NULL, shi_shi_fu_ze_ren VARCHAR(255) DEFAULT NULL, guan_pai_she_ji VARCHAR(255) DEFAULT NULL, pei_fei_she_ji VARCHAR(255) DEFAULT NULL, zhong_zi_que_ren VARCHAR(255) DEFAULT NULL, nong_yi_she_ji VARCHAR(255) DEFAULT NULL, jian_ce_shen_he VARCHAR(255) DEFAULT NULL, mo_shi_shen_he VARCHAR(255) DEFAULT NULL, ke_ti_shen_pi VARCHAR(255) DEFAULT NULL, xiang_mu_pi_zhun VARCHAR(255) DEFAULT NULL, gao_cheng VARCHAR(255) DEFAULT NULL, yan_hua_jian_hua VARCHAR(255) DEFAULT NULL, quan_yan_liang DOUBLE PRECISION DEFAULT NULL, you_ji_zhi_han_liang DOUBLE PRECISION DEFAULT NULL, ec DOUBLE PRECISION DEFAULT NULL, ph DOUBLE PRECISION DEFAULT NULL, guan_gai_fang_shi VARCHAR(255) DEFAULT NULL, fei_liao_shi_yong VARCHAR(255) DEFAULT NULL, yu_qi_dan_chan INT DEFAULT NULL, chan_neng_ti_sheng VARCHAR(255) DEFAULT NULL, tou_ru DOUBLE PRECISION DEFAULT NULL, chan_chu DOUBLE PRECISION DEFAULT NULL, guan_pai_xie_tong_cuo_shi TEXT DEFAULT NULL, xiao_zhang_pei_fei_yao_dian TEXT DEFAULT NULL, nong_yi_zai_pei_te_dian TEXT DEFAULT NULL, gen_zong_jian_ce_fang_an TEXT DEFAULT NULL, zu_zhi_shi_shi_xie_tong TEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, zhong_zi_pin_zhong VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN pattern.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN pattern.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, plain_password VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('COMMENT ON COLUMN messenger_messages.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.available_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.delivered_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE pattern_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE pattern');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

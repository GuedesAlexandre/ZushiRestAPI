<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240216163552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boxs_commandes (boxs_id INT NOT NULL, commandes_id INT NOT NULL, INDEX IDX_4BCF1F9751CF8763 (boxs_id), INDEX IDX_4BCF1F978BF5C2E6 (commandes_id), PRIMARY KEY(boxs_id, commandes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes_boissons (commandes_id INT NOT NULL, boissons_id INT NOT NULL, INDEX IDX_784599928BF5C2E6 (commandes_id), INDEX IDX_784599927366CD21 (boissons_id), PRIMARY KEY(commandes_id, boissons_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boxs_commandes ADD CONSTRAINT FK_4BCF1F9751CF8763 FOREIGN KEY (boxs_id) REFERENCES boxs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE boxs_commandes ADD CONSTRAINT FK_4BCF1F978BF5C2E6 FOREIGN KEY (commandes_id) REFERENCES commandes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes_boissons ADD CONSTRAINT FK_784599928BF5C2E6 FOREIGN KEY (commandes_id) REFERENCES commandes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commandes_boissons ADD CONSTRAINT FK_784599927366CD21 FOREIGN KEY (boissons_id) REFERENCES boissons (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE boissons DROP FOREIGN KEY FK_13E865EEA834B794');
        $this->addSql('DROP INDEX IDX_13E865EEA834B794 ON boissons');
        $this->addSql('ALTER TABLE boissons DROP id_commandes_id');
        $this->addSql('ALTER TABLE boxs DROP FOREIGN KEY FK_DD0ABFF1A834B794');
        $this->addSql('DROP INDEX IDX_DD0ABFF1A834B794 ON boxs');
        $this->addSql('ALTER TABLE boxs DROP id_commandes_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boxs_commandes DROP FOREIGN KEY FK_4BCF1F9751CF8763');
        $this->addSql('ALTER TABLE boxs_commandes DROP FOREIGN KEY FK_4BCF1F978BF5C2E6');
        $this->addSql('ALTER TABLE commandes_boissons DROP FOREIGN KEY FK_784599928BF5C2E6');
        $this->addSql('ALTER TABLE commandes_boissons DROP FOREIGN KEY FK_784599927366CD21');
        $this->addSql('DROP TABLE boxs_commandes');
        $this->addSql('DROP TABLE commandes_boissons');
        $this->addSql('ALTER TABLE boissons ADD id_commandes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE boissons ADD CONSTRAINT FK_13E865EEA834B794 FOREIGN KEY (id_commandes_id) REFERENCES commandes (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_13E865EEA834B794 ON boissons (id_commandes_id)');
        $this->addSql('ALTER TABLE boxs ADD id_commandes_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE boxs ADD CONSTRAINT FK_DD0ABFF1A834B794 FOREIGN KEY (id_commandes_id) REFERENCES commandes (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_DD0ABFF1A834B794 ON boxs (id_commandes_id)');
    }
}

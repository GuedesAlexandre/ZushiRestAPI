<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227161719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boxs_saveurs (boxs_id INT NOT NULL, saveurs_id INT NOT NULL, INDEX IDX_3E5B184E51CF8763 (boxs_id), INDEX IDX_3E5B184E3E2A04D2 (saveurs_id), PRIMARY KEY(boxs_id, saveurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE saveurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE boxs_saveurs ADD CONSTRAINT FK_3E5B184E51CF8763 FOREIGN KEY (boxs_id) REFERENCES boxs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE boxs_saveurs ADD CONSTRAINT FK_3E5B184E3E2A04D2 FOREIGN KEY (saveurs_id) REFERENCES saveurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE boxs DROP saveurs');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE boxs_saveurs DROP FOREIGN KEY FK_3E5B184E51CF8763');
        $this->addSql('ALTER TABLE boxs_saveurs DROP FOREIGN KEY FK_3E5B184E3E2A04D2');
        $this->addSql('DROP TABLE boxs_saveurs');
        $this->addSql('DROP TABLE saveurs');
        $this->addSql('ALTER TABLE boxs ADD saveurs VARCHAR(255) NOT NULL');
    }
}

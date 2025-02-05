<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205002449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE race race VARCHAR(255) DEFAULT NULL, CHANGE imagesanimal imagesanimal VARCHAR(255) DEFAULT NULL, CHANGE habitat_id habitat_id INT NOT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231FAFFE2D26');
        $this->addSql('ALTER TABLE animal CHANGE habitat_id habitat_id INT DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE race race VARCHAR(255) NOT NULL, CHANGE imagesanimal imagesanimal VARCHAR(255) NOT NULL');
    }
}

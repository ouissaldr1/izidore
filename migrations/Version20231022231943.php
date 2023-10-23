<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231022231943 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT NOT NULL, vendeur_field_id INT NOT NULL, acheteur_field_id INT NOT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, contenu VARCHAR(255) DEFAULT NULL, note INT NOT NULL, compliment VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8F91ABF0D93FE6D3 ON avis (vendeur_field_id)');
        $this->addSql('CREATE INDEX IDX_8F91ABF09367CCC5 ON avis (acheteur_field_id)');
        $this->addSql('CREATE TABLE user_test (id INT NOT NULL, email VARCHAR(180) NOT NULL, username VARCHAR(255) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A2FE32C5E7927C74 ON user_test (email)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0D93FE6D3 FOREIGN KEY (vendeur_field_id) REFERENCES user_test (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF09367CCC5 FOREIGN KEY (acheteur_field_id) REFERENCES user_test (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE avis DROP CONSTRAINT FK_8F91ABF0D93FE6D3');
        $this->addSql('ALTER TABLE avis DROP CONSTRAINT FK_8F91ABF09367CCC5');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE user_test');
    }
}

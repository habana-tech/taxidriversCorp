<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010165144 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, telephone VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_C7440455E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD client_id INT NOT NULL, DROP client_name, DROP client_email, CHANGE price price DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE19EB6921 ON booking (client_id)');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE19EB6921');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP INDEX IDX_E00CEDDE19EB6921 ON booking');
        $this->addSql('ALTER TABLE booking ADD client_name VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD client_email VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP client_id, CHANGE price price DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\'');
    }
}

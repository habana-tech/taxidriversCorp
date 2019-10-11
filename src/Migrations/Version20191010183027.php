<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010183027 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking CHANGE price price DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE place ADD is_official TINYINT(1) NOT NULL, ADD address VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking CHANGE price price DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE country country VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE place DROP is_official, DROP address');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\'');
    }
}

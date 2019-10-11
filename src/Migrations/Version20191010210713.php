<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010210713 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking ADD origin_id INT NOT NULL, ADD destination_id INT NOT NULL, CHANGE price price DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE56A273CC FOREIGN KEY (origin_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE816C6140 FOREIGN KEY (destination_id) REFERENCES place (id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE56A273CC ON booking (origin_id)');
        $this->addSql('CREATE INDEX IDX_E00CEDDE816C6140 ON booking (destination_id)');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE place CHANGE address address VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE56A273CC');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE816C6140');
        $this->addSql('DROP INDEX IDX_E00CEDDE56A273CC ON booking');
        $this->addSql('DROP INDEX IDX_E00CEDDE816C6140 ON booking');
        $this->addSql('ALTER TABLE booking DROP origin_id, DROP destination_id, CHANGE price price DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE country country VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE place CHANGE address address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE password_reset_token password_reset_token VARCHAR(191) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\'');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200318012847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, origin_id INT NOT NULL, destination_id INT NOT NULL, price DOUBLE PRECISION DEFAULT NULL, travel_date DATE NOT NULL, travel_time TIME NOT NULL, comment LONGTEXT DEFAULT NULL, currency VARCHAR(255) NOT NULL, campaign JSON DEFAULT NULL, passenger INT NOT NULL, unique_id VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_E00CEDDEE3C68343 (unique_id), INDEX IDX_E00CEDDE19EB6921 (client_id), INDEX IDX_E00CEDDE56A273CC (origin_id), INDEX IDX_E00CEDDE816C6140 (destination_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, telephone VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, locale VARCHAR(255) DEFAULT NULL, unique_id VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C7440455E7927C74 (email), UNIQUE INDEX UNIQ_C7440455E3C68343 (unique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(180) DEFAULT NULL, image_size INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, base64 LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, public TINYINT(1) NOT NULL, address VARCHAR(255) DEFAULT NULL, metadata JSON DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, origin_id INT NOT NULL, destination_id INT NOT NULL, image_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, active TINYINT(1) DEFAULT NULL, metadata JSON DEFAULT NULL, priority INT DEFAULT NULL, machine_name VARCHAR(255) NOT NULL, INDEX IDX_E19D9AD256A273CC (origin_id), INDEX IDX_E19D9AD2816C6140 (destination_id), INDEX IDX_E19D9AD23DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_place (service_id INT NOT NULL, place_id INT NOT NULL, INDEX IDX_DD6FBE2AED5CA9E6 (service_id), INDEX IDX_DD6FBE2ADA6A219 (place_id), PRIMARY KEY(service_id, place_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_image (service_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_6C4FE9B8ED5CA9E6 (service_id), INDEX IDX_6C4FE9B83DA5256D (image_id), PRIMARY KEY(service_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE56A273CC FOREIGN KEY (origin_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE816C6140 FOREIGN KEY (destination_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD256A273CC FOREIGN KEY (origin_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2816C6140 FOREIGN KEY (destination_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD23DA5256D FOREIGN KEY (image_id) REFERENCES service (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE service_place ADD CONSTRAINT FK_DD6FBE2AED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_place ADD CONSTRAINT FK_DD6FBE2ADA6A219 FOREIGN KEY (place_id) REFERENCES place (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B8ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B83DA5256D FOREIGN KEY (image_id) REFERENCES service (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE19EB6921');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE56A273CC');
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDE816C6140');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD256A273CC');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2816C6140');
        $this->addSql('ALTER TABLE service_place DROP FOREIGN KEY FK_DD6FBE2ADA6A219');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD23DA5256D');
        $this->addSql('ALTER TABLE service_place DROP FOREIGN KEY FK_DD6FBE2AED5CA9E6');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B8ED5CA9E6');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B83DA5256D');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE service_place');
        $this->addSql('DROP TABLE service_image');
        $this->addSql('DROP TABLE user');
    }
}

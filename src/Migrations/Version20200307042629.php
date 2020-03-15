<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200307042629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE taxi_service_image DROP FOREIGN KEY FK_DB05BEC5FABDC375');
        $this->addSql('ALTER TABLE taxi_service_place DROP FOREIGN KEY FK_6A25E957FABDC375');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, origin_id INT NOT NULL, destination_id INT NOT NULL, image_id INT DEFAULT NULL, category VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, active TINYINT(1) DEFAULT NULL, metadata JSON DEFAULT NULL, priority INT DEFAULT NULL, machine_name VARCHAR(255) NOT NULL, INDEX IDX_E19D9AD256A273CC (origin_id), INDEX IDX_E19D9AD2816C6140 (destination_id), INDEX IDX_E19D9AD23DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_place (service_id INT NOT NULL, place_id INT NOT NULL, INDEX IDX_DD6FBE2AED5CA9E6 (service_id), INDEX IDX_DD6FBE2ADA6A219 (place_id), PRIMARY KEY(service_id, place_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_image (service_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_6C4FE9B8ED5CA9E6 (service_id), INDEX IDX_6C4FE9B83DA5256D (image_id), PRIMARY KEY(service_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD256A273CC FOREIGN KEY (origin_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2816C6140 FOREIGN KEY (destination_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD23DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE service_place ADD CONSTRAINT FK_DD6FBE2AED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_place ADD CONSTRAINT FK_DD6FBE2ADA6A219 FOREIGN KEY (place_id) REFERENCES place (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B8ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B83DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE taxi_service');
        $this->addSql('DROP TABLE taxi_service_image');
        $this->addSql('DROP TABLE taxi_service_place');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE service_place DROP FOREIGN KEY FK_DD6FBE2AED5CA9E6');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B8ED5CA9E6');
        $this->addSql('CREATE TABLE taxi_service (id INT AUTO_INCREMENT NOT NULL, origin_id INT NOT NULL, destination_id INT NOT NULL, image_id INT DEFAULT NULL, category VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) DEFAULT NULL, metadata JSON DEFAULT NULL, priority INT DEFAULT NULL, machine_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_286A6349816C6140 (destination_id), INDEX IDX_286A634956A273CC (origin_id), INDEX IDX_286A63493DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE taxi_service_image (taxi_service_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_DB05BEC5FABDC375 (taxi_service_id), INDEX IDX_DB05BEC53DA5256D (image_id), PRIMARY KEY(taxi_service_id, image_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE taxi_service_place (taxi_service_id INT NOT NULL, place_id INT NOT NULL, INDEX IDX_6A25E957FABDC375 (taxi_service_id), INDEX IDX_6A25E957DA6A219 (place_id), PRIMARY KEY(taxi_service_id, place_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE taxi_service ADD CONSTRAINT FK_286A63493DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE taxi_service ADD CONSTRAINT FK_286A634956A273CC FOREIGN KEY (origin_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE taxi_service ADD CONSTRAINT FK_286A6349816C6140 FOREIGN KEY (destination_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE taxi_service_image ADD CONSTRAINT FK_DB05BEC53DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taxi_service_image ADD CONSTRAINT FK_DB05BEC5FABDC375 FOREIGN KEY (taxi_service_id) REFERENCES taxi_service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taxi_service_place ADD CONSTRAINT FK_6A25E957DA6A219 FOREIGN KEY (place_id) REFERENCES place (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taxi_service_place ADD CONSTRAINT FK_6A25E957FABDC375 FOREIGN KEY (taxi_service_id) REFERENCES taxi_service (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE service_place');
        $this->addSql('DROP TABLE service_image');
    }
}

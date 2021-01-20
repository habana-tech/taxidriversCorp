<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210119220110 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE place_image (place_id INT NOT NULL, image_id INT NOT NULL, INDEX IDX_6C4B1F7CDA6A219 (place_id), INDEX IDX_6C4B1F7C3DA5256D (image_id), PRIMARY KEY(place_id, image_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE place_image ADD CONSTRAINT FK_6C4B1F7CDA6A219 FOREIGN KEY (place_id) REFERENCES place (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE place_image ADD CONSTRAINT FK_6C4B1F7C3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking CHANGE price price DOUBLE PRECISION DEFAULT NULL, CHANGE campaign campaign JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(25) DEFAULT NULL, CHANGE country country VARCHAR(60) DEFAULT NULL, CHANGE locale locale VARCHAR(4) DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE image_name image_name VARCHAR(180) DEFAULT NULL, CHANGE image_size image_size INT DEFAULT NULL, CHANGE description description VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE place ADD translated_entity_id INT DEFAULT NULL, DROP public, CHANGE address address VARCHAR(200) DEFAULT NULL, CHANGE metadata metadata JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CD5DED8437 FOREIGN KEY (translated_entity_id) REFERENCES place (id)');
        $this->addSql('CREATE INDEX IDX_741D53CD5DED8437 ON place (translated_entity_id)');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD23DA5256D');
        $this->addSql('DROP INDEX IDX_E19D9AD23DA5256D ON service');
        $this->addSql('ALTER TABLE service ADD translated_entity_id INT DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, DROP image_id, CHANGE active active TINYINT(1) DEFAULT NULL, CHANGE metadata metadata JSON DEFAULT NULL, CHANGE priority priority INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD25DED8437 FOREIGN KEY (translated_entity_id) REFERENCES service (id)');
        $this->addSql('CREATE INDEX IDX_E19D9AD25DED8437 ON service (translated_entity_id)');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B83DA5256D');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B83DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE place_image');
        $this->addSql('ALTER TABLE booking CHANGE price price DOUBLE PRECISION DEFAULT \'NULL\', CHANGE campaign campaign LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE client CHANGE telephone telephone VARCHAR(25) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(60) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE locale locale VARCHAR(4) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE image CHANGE image_name image_name VARCHAR(180) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE image_size image_size INT DEFAULT NULL, CHANGE description description VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CD5DED8437');
        $this->addSql('DROP INDEX IDX_741D53CD5DED8437 ON place');
        $this->addSql('ALTER TABLE place ADD public TINYINT(1) NOT NULL, DROP translated_entity_id, CHANGE address address VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE metadata metadata LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD25DED8437');
        $this->addSql('DROP INDEX IDX_E19D9AD25DED8437 ON service');
        $this->addSql('ALTER TABLE service ADD image_id INT DEFAULT NULL, DROP translated_entity_id, DROP description, CHANGE active active TINYINT(1) DEFAULT \'NULL\', CHANGE metadata metadata LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_bin`, CHANGE priority priority INT DEFAULT NULL');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD23DA5256D FOREIGN KEY (image_id) REFERENCES service (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_E19D9AD23DA5256D ON service (image_id)');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B83DA5256D');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B83DA5256D FOREIGN KEY (image_id) REFERENCES service (id) ON DELETE CASCADE');
    }
}

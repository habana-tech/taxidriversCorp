<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191003223213 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE role (name VARCHAR(191) NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_role (user_id INT NOT NULL COMMENT \'(DC2Type:msgphp_user_id)\', role_name VARCHAR(191) NOT NULL, INDEX IDX_2DE8C6A3A76ED395 (user_id), INDEX IDX_2DE8C6A3E09C0C92 (role_name), PRIMARY KEY(user_id, role_name)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_role ADD CONSTRAINT FK_2DE8C6A3E09C0C92 FOREIGN KEY (role_name) REFERENCES role (name) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD credential_email VARCHAR(191) NOT NULL, ADD credential_password VARCHAR(255) NOT NULL, ADD password_reset_token VARCHAR(191) DEFAULT NULL, ADD password_requested_at DATETIME DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649A5D24B55 ON user (credential_email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6496B7BA4B6 ON user (password_reset_token)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_role DROP FOREIGN KEY FK_2DE8C6A3E09C0C92');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE user_role');
        $this->addSql('DROP INDEX UNIQ_8D93D649A5D24B55 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D6496B7BA4B6 ON user');
        $this->addSql('ALTER TABLE user DROP credential_email, DROP credential_password, DROP password_reset_token, DROP password_requested_at');
    }
}

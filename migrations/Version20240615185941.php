<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240615185631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add nom and prenom fields to user table';
    }

    public function up(Schema $schema): void
    {
        // This migration is written for SQLite
        $this->addSql('ALTER TABLE user ADD COLUMN nom VARCHAR(180) NOT NULL DEFAULT ""');
        $this->addSql('ALTER TABLE user ADD COLUMN prenom VARCHAR(180) NOT NULL DEFAULT ""');
    }

    public function down(Schema $schema): void
    {
        // To revert the changes made in this migration
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, email, roles, password, is_verified FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, is_verified BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO user (id, email, roles, password, is_verified) SELECT id, email, roles, password, is_verified FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
    }
}

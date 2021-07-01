<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210701085441 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__meme AS SELECT id, name, created_at FROM meme');
        $this->addSql('DROP TABLE meme');
        $this->addSql('CREATE TABLE meme (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, created_at DATETIME NOT NULL, link VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO meme (id, name, created_at) SELECT id, name, created_at FROM __temp__meme');
        $this->addSql('DROP TABLE __temp__meme');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__meme AS SELECT id, name, created_at FROM meme');
        $this->addSql('DROP TABLE meme');
        $this->addSql('CREATE TABLE meme (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL --(DC2Type:datetime_immutable)
        )');
        $this->addSql('INSERT INTO meme (id, name, created_at) SELECT id, name, created_at FROM __temp__meme');
        $this->addSql('DROP TABLE __temp__meme');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220407151731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE Etat Etat VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE datepub datepub DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE reacts CHANGE datecrea datecrea DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE Etat Etat VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE datepub datepub DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE reacts CHANGE datecrea datecrea DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}

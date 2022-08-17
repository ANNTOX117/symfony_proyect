<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220817223317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interaction DROP FOREIGN KEY FK_378DFDA7E85F12B8');
        $this->addSql('DROP INDEX IDX_378DFDA7E85F12B8 ON interaction');
        $this->addSql('ALTER TABLE interaction CHANGE post_id_id post_id INT NOT NULL');
        $this->addSql('ALTER TABLE interaction ADD CONSTRAINT FK_378DFDA74B89032C FOREIGN KEY (post_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_378DFDA74B89032C ON interaction (post_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE interaction DROP FOREIGN KEY FK_378DFDA74B89032C');
        $this->addSql('DROP INDEX IDX_378DFDA74B89032C ON interaction');
        $this->addSql('ALTER TABLE interaction CHANGE post_id post_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE interaction ADD CONSTRAINT FK_378DFDA7E85F12B8 FOREIGN KEY (post_id_id) REFERENCES post (id)');
        $this->addSql('CREATE INDEX IDX_378DFDA7E85F12B8 ON interaction (post_id_id)');
    }
}

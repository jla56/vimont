<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200929133416 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, price INT DEFAULT NULL, content LONGTEXT NOT NULL, picture VARCHAR(255) NOT NULL, INDEX IDX_64C19C112469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faq (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, question LONGTEXT NOT NULL, response LONGTEXT NOT NULL, created_at DATETIME NOT NULL, email VARCHAR(255) NOT NULL, display TINYINT(1) NOT NULL, pseudo VARCHAR(255) NOT NULL, INDEX IDX_E8FF75CC12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, practitioner_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_D11814AB12469DE2 (category_id), INDEX IDX_D11814AB1121EA2C (practitioner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE news (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE picture (id INT AUTO_INCREMENT NOT NULL, intervention_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_16DB4F898EAE3863 (intervention_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE practitioner (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, picture VARCHAR(255) DEFAULT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category ADD CONSTRAINT FK_64C19C112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE faq ADD CONSTRAINT FK_E8FF75CC12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB1121EA2C FOREIGN KEY (practitioner_id) REFERENCES practitioner (id)');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_16DB4F898EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category DROP FOREIGN KEY FK_64C19C112469DE2');
        $this->addSql('ALTER TABLE faq DROP FOREIGN KEY FK_E8FF75CC12469DE2');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB12469DE2');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_16DB4F898EAE3863');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB1121EA2C');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE faq');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP TABLE practitioner');
        $this->addSql('DROP TABLE user');
    }
}

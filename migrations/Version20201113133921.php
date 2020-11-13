<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201113133921 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, quantity_type_id INT DEFAULT NULL, container_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, quantity INT NOT NULL, expiration_date DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_D34A04AD36F84596 (quantity_type_id), INDEX IDX_D34A04ADBC21F742 (container_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD36F84596 FOREIGN KEY (quantity_type_id) REFERENCES quantity_type (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBC21F742 FOREIGN KEY (container_id) REFERENCES container (id)');
        $this->addSql('DROP TABLE products');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, quantity_type_id INT DEFAULT NULL, container_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, quantity INT NOT NULL, expiration_date DATETIME DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_B3BA5A5ABC21F742 (container_id), UNIQUE INDEX UNIQ_B3BA5A5A36F84596 (quantity_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5A36F84596 FOREIGN KEY (quantity_type_id) REFERENCES quantity_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE products ADD CONSTRAINT FK_B3BA5A5ABC21F742 FOREIGN KEY (container_id) REFERENCES container (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE product');
    }
}

<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150720213259 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE similarIngredients (first_ingredient_id INT NOT NULL, second_ingredient_id INT NOT NULL, INDEX IDX_49A6E5261442B708 (first_ingredient_id), INDEX IDX_49A6E526BEC769D9 (second_ingredient_id), PRIMARY KEY(first_ingredient_id, second_ingredient_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE similar_ingredients (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE similarIngredients ADD CONSTRAINT FK_49A6E5261442B708 FOREIGN KEY (first_ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE similarIngredients ADD CONSTRAINT FK_49A6E526BEC769D9 FOREIGN KEY (second_ingredient_id) REFERENCES ingredient (id)');
        $this->addSql('ALTER TABLE recipe ADD amount_of_people INT NOT NULL, ADD cooking_time INT NOT NULL, ADD rating DOUBLE PRECISION NOT NULL, ADD image LONGBLOB NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE similarIngredients');
        $this->addSql('DROP TABLE similar_ingredients');
        $this->addSql('ALTER TABLE recipe DROP amount_of_people, DROP cooking_time, DROP rating, DROP image');
    }
}

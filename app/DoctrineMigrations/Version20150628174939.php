<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150628174939 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE recipe_ingredient CHANGE quantity_unit quantityUnit VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE dinner ADD weekMenuId INT DEFAULT NULL, CHANGE number_of_persons numberOfPersons INT NOT NULL');
        $this->addSql('ALTER TABLE dinner ADD CONSTRAINT FK_89B4103BF0E21EB5 FOREIGN KEY (weekMenuId) REFERENCES week_menu (id)');
        $this->addSql('CREATE INDEX IDX_89B4103BF0E21EB5 ON dinner (weekMenuId)');
        $this->addSql('ALTER TABLE dinner_has_recipe ADD recipe_id INT DEFAULT NULL, ADD dinnerId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dinner_has_recipe ADD CONSTRAINT FK_E0F81404BB8351A FOREIGN KEY (dinnerId) REFERENCES dinner (id)');
        $this->addSql('ALTER TABLE dinner_has_recipe ADD CONSTRAINT FK_E0F8140459D8A214 FOREIGN KEY (recipe_id) REFERENCES recipe (id)');
        $this->addSql('CREATE INDEX IDX_E0F81404BB8351A ON dinner_has_recipe (dinnerId)');
        $this->addSql('CREATE INDEX IDX_E0F8140459D8A214 ON dinner_has_recipe (recipe_id)');
        $this->addSql('ALTER TABLE week_menu ADD weekStart DATE NOT NULL, ADD weekEnd DATE NOT NULL, DROP week_start, DROP week_end');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE dinner DROP FOREIGN KEY FK_89B4103BF0E21EB5');
        $this->addSql('DROP INDEX IDX_89B4103BF0E21EB5 ON dinner');
        $this->addSql('ALTER TABLE dinner DROP weekMenuId, CHANGE numberofpersons number_of_persons INT NOT NULL');
        $this->addSql('ALTER TABLE dinner_has_recipe DROP FOREIGN KEY FK_E0F81404BB8351A');
        $this->addSql('ALTER TABLE dinner_has_recipe DROP FOREIGN KEY FK_E0F8140459D8A214');
        $this->addSql('DROP INDEX IDX_E0F81404BB8351A ON dinner_has_recipe');
        $this->addSql('DROP INDEX IDX_E0F8140459D8A214 ON dinner_has_recipe');
        $this->addSql('ALTER TABLE dinner_has_recipe DROP recipe_id, DROP dinnerId');
        $this->addSql('ALTER TABLE recipe_ingredient CHANGE quantityunit quantity_unit VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE week_menu ADD week_start DATE NOT NULL, ADD week_end DATE NOT NULL, DROP weekStart, DROP weekEnd');
    }
}

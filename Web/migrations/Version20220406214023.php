<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406214023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse CHANGE iduser iduser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article CHANGE auteur auteur INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE auteur_c auteur_c INT DEFAULT NULL, CHANGE id_article id_article INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY fk_livraison_user');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY livraison_ibfk_3');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY livraison_ibfk_2');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY livraison_ibfk_4');
        $this->addSql('ALTER TABLE livraison CHANGE adresse adresse INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL, CHANGE iduser iduser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FC35F0816 FOREIGN KEY (adresse) REFERENCES adresse (id_adresse)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F35E7E71D FOREIGN KEY (id_livreur) REFERENCES livreur (idLivreur)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F5E5C27E9 FOREIGN KEY (iduser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FF7384557 FOREIGN KEY (id_produit) REFERENCES produit (idProduit)');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY panier_ibfk_1');
        $this->addSql('ALTER TABLE panier CHANGE idProduit idProduit INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2391C87D5 FOREIGN KEY (idProduit) REFERENCES produit (idProduit)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY produit_ibfk_1');
        $this->addSql('ALTER TABLE produit CHANGE id_categ id_categ INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27ED0B8043 FOREIGN KEY (id_categ) REFERENCES categorie (idCateg)');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_2');
        $this->addSql('ALTER TABLE reservation CHANGE id_client id_client INT DEFAULT NULL, CHANGE id_salle id_salle INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A0123F6C FOREIGN KEY (id_salle) REFERENCES salle (idSalle)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE adresse CHANGE iduser iduser INT NOT NULL');
        $this->addSql('ALTER TABLE article CHANGE auteur auteur INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire CHANGE id_article id_article INT NOT NULL, CHANGE auteur_c auteur_c INT NOT NULL');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FC35F0816');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F35E7E71D');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F5E5C27E9');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FF7384557');
        $this->addSql('ALTER TABLE livraison CHANGE adresse adresse INT NOT NULL, CHANGE iduser iduser INT NOT NULL, CHANGE id_produit id_produit INT NOT NULL');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT fk_livraison_user FOREIGN KEY (iduser) REFERENCES user (idUser) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT livraison_ibfk_3 FOREIGN KEY (id_produit) REFERENCES produit (idProduit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT livraison_ibfk_2 FOREIGN KEY (adresse) REFERENCES adresse (id_adresse) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT livraison_ibfk_4 FOREIGN KEY (id_livreur) REFERENCES livreur (idLivreur) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2391C87D5');
        $this->addSql('ALTER TABLE panier CHANGE idProduit idProduit INT NOT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT panier_ibfk_1 FOREIGN KEY (idProduit) REFERENCES produit (idProduit) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27ED0B8043');
        $this->addSql('ALTER TABLE produit CHANGE id_categ id_categ INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT produit_ibfk_1 FOREIGN KEY (id_categ) REFERENCES categorie (idCateg) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A0123F6C');
        $this->addSql('ALTER TABLE reservation CHANGE id_salle id_salle INT NOT NULL, CHANGE id_client id_client INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_2 FOREIGN KEY (id_salle) REFERENCES salle (idSalle) ON DELETE CASCADE');
    }
}

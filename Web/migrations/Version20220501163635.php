<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220501163635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id_adresse INT AUTO_INCREMENT NOT NULL, iduser INT DEFAULT NULL, ville VARCHAR(50) NOT NULL, rue VARCHAR(50) NOT NULL, numMaison INT NOT NULL, INDEX IDX_C35F08165E5C27E9 (iduser), PRIMARY KEY(id_adresse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (auteur INT DEFAULT NULL, idArticle INT AUTO_INCREMENT NOT NULL, contenu TINYTEXT NOT NULL, titre VARCHAR(15) NOT NULL, Etat VARCHAR(200) NOT NULL, image VARCHAR(200) NOT NULL, nbrreact INT NOT NULL, INDEX IDX_23A0E6655AB140 (auteur), PRIMARY KEY(idArticle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (idCateg INT AUTO_INCREMENT NOT NULL, nomCateg VARCHAR(10) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(idCateg)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id_article INT DEFAULT NULL, auteur_c INT DEFAULT NULL, idCommentaire INT AUTO_INCREMENT NOT NULL, contenu_c TINYTEXT NOT NULL, datepub DATETIME NOT NULL, INDEX IDX_67F068BCDCA7A716 (id_article), INDEX IDX_67F068BCE45EAAC3 (auteur_c), PRIMARY KEY(idCommentaire)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (id_produit INT DEFAULT NULL, adresse INT DEFAULT NULL, id_livreur INT DEFAULT NULL, iduser INT DEFAULT NULL, idLivraison INT AUTO_INCREMENT NOT NULL, etat TINYINT(1) NOT NULL, type VARCHAR(250) NOT NULL, INDEX IDX_A60C9F1FF7384557 (id_produit), INDEX IDX_A60C9F1FC35F0816 (adresse), INDEX IDX_A60C9F1F35E7E71D (id_livreur), INDEX IDX_A60C9F1F5E5C27E9 (iduser), PRIMARY KEY(idLivraison)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livreur (idLivreur INT AUTO_INCREMENT NOT NULL, nomLivreur VARCHAR(20) NOT NULL, numtel INT NOT NULL, prenom VARCHAR(100) NOT NULL, email VARCHAR(250) NOT NULL, PRIMARY KEY(idLivreur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (idPanier INT AUTO_INCREMENT NOT NULL, idProduit INT DEFAULT NULL, INDEX IDX_24CC0DF2391C87D5 (idProduit), PRIMARY KEY(idPanier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id_categ INT DEFAULT NULL, idProduit INT AUTO_INCREMENT NOT NULL, nomProduit VARCHAR(30) NOT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(250) NOT NULL, image VARCHAR(200) NOT NULL, INDEX IDX_29A5EC27ED0B8043 (id_categ), PRIMARY KEY(idProduit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profanities (id INT AUTO_INCREMENT NOT NULL, word VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B8715B4C3F17511 (word), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, idarticle INT DEFAULT NULL, iduser INT DEFAULT NULL, note INT NOT NULL, INDEX IDX_D8892622DD3E5C08 (idarticle), INDEX IDX_D88926225E5C27E9 (iduser), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reacts (idcommentaire INT DEFAULT NULL, idusers INT DEFAULT NULL, idReact INT AUTO_INCREMENT NOT NULL, datecrea DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, INDEX IDX_EDAE8C3FA1311813 (idcommentaire), INDEX IDX_EDAE8C3FC286C9F0 (idusers), PRIMARY KEY(idReact)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id_salle INT DEFAULT NULL, id_client INT DEFAULT NULL, idReservation INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, nbrP INT NOT NULL, INDEX IDX_42C84955A0123F6C (id_salle), INDEX IDX_42C84955E173B1B8 (id_client), PRIMARY KEY(idReservation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salle (idSalle INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prixSalle DOUBLE PRECISION NOT NULL, image VARCHAR(200) NOT NULL, capacite INT NOT NULL, PRIMARY KEY(idSalle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (idType INT AUTO_INCREMENT NOT NULL, libelleType VARCHAR(20) NOT NULL, PRIMARY KEY(idType)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (idUser INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, role JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, is_expired TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(idUser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE adresse ADD CONSTRAINT FK_C35F08165E5C27E9 FOREIGN KEY (iduser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6655AB140 FOREIGN KEY (auteur) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDCA7A716 FOREIGN KEY (id_article) REFERENCES article (idArticle)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE45EAAC3 FOREIGN KEY (auteur_c) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FF7384557 FOREIGN KEY (id_produit) REFERENCES produit (idProduit)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1FC35F0816 FOREIGN KEY (adresse) REFERENCES adresse (id_adresse)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F35E7E71D FOREIGN KEY (id_livreur) REFERENCES livreur (idLivreur)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F5E5C27E9 FOREIGN KEY (iduser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2391C87D5 FOREIGN KEY (idProduit) REFERENCES produit (idProduit)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27ED0B8043 FOREIGN KEY (id_categ) REFERENCES categorie (idCateg)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622DD3E5C08 FOREIGN KEY (idarticle) REFERENCES article (idArticle)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926225E5C27E9 FOREIGN KEY (iduser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3FA1311813 FOREIGN KEY (idcommentaire) REFERENCES commentaire (idCommentaire)');
        $this->addSql('ALTER TABLE reacts ADD CONSTRAINT FK_EDAE8C3FC286C9F0 FOREIGN KEY (idusers) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A0123F6C FOREIGN KEY (id_salle) REFERENCES salle (idSalle)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E173B1B8 FOREIGN KEY (id_client) REFERENCES user (idUser)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FC35F0816');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDCA7A716');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622DD3E5C08');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27ED0B8043');
        $this->addSql('ALTER TABLE reacts DROP FOREIGN KEY FK_EDAE8C3FA1311813');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F35E7E71D');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1FF7384557');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2391C87D5');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A0123F6C');
        $this->addSql('ALTER TABLE adresse DROP FOREIGN KEY FK_C35F08165E5C27E9');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6655AB140');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE45EAAC3');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F5E5C27E9');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926225E5C27E9');
        $this->addSql('ALTER TABLE reacts DROP FOREIGN KEY FK_EDAE8C3FC286C9F0');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E173B1B8');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE livreur');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE profanities');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE reacts');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE salle');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
    }
}

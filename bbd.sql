CREATE TABLE Utilisateur 
(idUtilisateur INT(11), 
nom VARCHAR(64), 
prenom VARCHAR(64), 
mdp VARCHAR(64),
dateInscription DATE,
PRIMARY KEY(idUtilisateur));

CREATE TABLE Tacos
(idTacos INT(11), 
taille VARCHAR(64), 
nomTacos VARCHAR(64),
PRIMARY KEY (idTacos)); 

CREATE TABLE Sauce 
(idSauce INT(11), 
nomSauce VARCHAR(64),
PRIMARY KEY (idSauce));

CREATE TABLE Viande
(idViande INT(11), 
nomViande VARCHAR(64),
PRIMARY KEY (idViande));

CREATE TABLE Boisson 
(idBoisson INT(11), 
nomBoisson VARCHAR(64),
PRIMARY KEY (idBoisson)); 

CREATE TABLE Commande 
(idCommande INT(11), 
PRIMARY KEY(idCommande));

CREATE TABLE Panier 
(idPanier INT(11),
PRIMARY KEY (idPanier));

ALTER TABLE Utilisateur_Panier 
ADD CONSTRAINTS Utilisateur_Panier_idPanier
FOREIGN KEY (idPanier)
REFERENCES Panier(idPanier);

ALTER TABLE Utilisateur_Commande
ADD CONSTRAINTS Utilisateur_Commande_idCommande
FOREIGN KEY (idCommande)
REFERENCES Commande(idCommande);

ALTER TABLE Commande_Boisson
ADD CONSTRAINTS Commande_Boisson_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson(idBoisson);

ALTER TABLE Commande_Tacos
ADD CONSTRAINTS Commande_Tacos_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Tacos_Sauce
ADD CONSTRAINTS Tacos_Sauce_idSauce
FOREIGN KEY (idSauce)
REFERENCES Sauce(idSauce);

ALTER TABLE Tacos_Viande
ADD CONSTRAINTS Tacos_Viande_idViande
FOREIGN KEY (idViande)
REFERENCES Viande(idViande);




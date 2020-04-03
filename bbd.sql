CREATE TABLE Utilisateur 
(
	idUtilisateur INT(11), 
	nom VARCHAR(64), 
	prenom VARCHAR(64), 
	mdp VARCHAR(64),
	dateInscription DATE,
	PRIMARY KEY(idUtilisateur)
);

CREATE TABLE Tacos
(
	idTacos INT(11), 
	taille VARCHAR(64), 
	nomTacos VARCHAR(64),
	idSauce INT(11),
	idViande INT(11), 
	PRIMARY KEY (idTacos)
); 

CREATE TABLE Sauce 
(
	idSauce INT(11), 
	nomSauce VARCHAR(64),
	PRIMARY KEY (idSauce)
);

CREATE TABLE Viande
(
	idViande INT(11), 
	nomViande VARCHAR(64),
	PRIMARY KEY (idViande)
);

CREATE TABLE Boisson 
(
	idBoisson INT(11), 
	nomBoisson VARCHAR(64),
	PRIMARY KEY (idBoisson)
); 

CREATE TABLE Commande 
(
	idCommande INT(11),
	idBoisson INT(11), 
	idTacos INT(11),
	idUtilisateur INT(11), 
	PRIMARY KEY(idCommande)
);

ALTER TABLE Commande
ADD CONSTRAINT Commande_idBoisson
FOREIGN KEY (idBoisson)
REFERENCES Boisson(idBoisson);

ALTER TABLE Commande
ADD CONSTRAINT Commande_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE	Commande
ADD CONSTRAINT Commande_idUtilisateur
FOREIGN KEY (idUtilisateur)
REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE Tacos
ADD CONSTRAINT Tacos_idSauce
FOREIGN KEY (idSauce)
REFERENCES Sauce(idSauce);

ALTER TABLE Tacos
ADD CONSTRAINT Tacos_idViande
FOREIGN KEY (idViande)
REFERENCES Viande(idViande);





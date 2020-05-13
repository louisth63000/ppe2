CREATE TABLE Tacos
(
	idTacos INT(11)  NOT NULL AUTO_INCREMENT, 
	taille VARCHAR(64), 
	nomTacos VARCHAR(64),
	PRIMARY KEY (idTacos)
); 

CREATE TABLE Sauce 
(
	idSauce INT(11)  NOT NULL AUTO_INCREMENT, 
	nomSauce VARCHAR(64),
	idTacos INT(11),
	PRIMARY KEY (idSauce)
);

CREATE TABLE Viande
(
	idViande INT(11)  NOT NULL AUTO_INCREMENT,
	nomViande VARCHAR(64),
	idTacos INT(11),
	PRIMARY KEY (idViande)
);

CREATE TABLE Boisson 
(
	idBoisson INT(11)  NOT NULL AUTO_INCREMENT, 
	nomBoisson VARCHAR(64),
	idCommande INT(11),
	PRIMARY KEY (idBoisson)
); 

CREATE TABLE Commande 
(
	idCommande INT(11)  NOT NULL AUTO_INCREMENT,
	idTacos INT(11),
	nom VARCHAR(64),
	prenom VARCHAR(64),
	adresse VARCHAR(64),
	PRIMARY KEY(idCommande)
);


ALTER TABLE Boisson
ADD CONSTRAINT Boisson_idCommande
FOREIGN KEY (idCommande)
REFERENCES Commande(idCommande);

ALTER TABLE Commande
ADD CONSTRAINT Commande_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Sauce
ADD CONSTRAINT Sauce_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);

ALTER TABLE Viande
ADD CONSTRAINT Viande_idTacos
FOREIGN KEY (idTacos)
REFERENCES Tacos(idTacos);


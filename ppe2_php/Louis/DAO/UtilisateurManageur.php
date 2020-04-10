<?php
include_once ('tools/DatabaseLinkers.php');
include_once ('DTO/Utilisateur.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UtilisateurManageur
 *
 * @author utilisateur
 */
class UtilisateurManageur {
    public static function  findUtilisateur($idUtilisateur)
    {
        $Utilisateur=new Utilisateur();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("SELECT * FROM Utilisateur WHERE idUtilisateur=?");
        $state->bindParam(1,$idUtilisateur);
        $state->execute();
        $resultas=$state->fetchAll();
        $resultasMessage=$resultas[0];
        $Utilisateur->setIdUtilisateur($idUtilisateur);
        $Utilisateur->setNom($resultasMessage["nom"]);
        $Utilisateur->setPrenom($resultasMessage["prenom"]);
        $Utilisateur->setMdp($resultasMessage["mdp"]);
        $Utilisateur->setDateInscription($resultasMessage["dateInscription"]);
        $Utilisateur->setIdPanier($resultasMessage["idPanier"]);
        $Utilisateur->setEmail($resultasMessage['email']);
        return $Utilisateur;   
    }
    
     public static function insertUtilisateur($email,$mdp)
    {
         $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("INSERT INTO Utilisateur(email,mdp,dateInscription)
VALUES(?,?,CURDATE())");
         $state->bindParam(1,$email);
         $state->bindParam(2,$mdp);
         $state->execute();
            
        
    }
    public static function deleteUtilisateur($idUtilisateur)
    {
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("DELETE FROM Utilisateur WHERE idUtilisateur=?");
        $state->bindParam(1,$idUtilisateur);
        $state->execute();
    }
    public static function UpdateUtilisateurs($Utilisateur)
    {
        $idUtilisateur=$Utilisateur->getIdUtilisateur();
        $nom=$Utilisateur->getNom();
        $prenom=$Utilisateur->getPrenom();
        $mdp=$Utilisateur->getMdp();
        $email=$Utilisateur->getEmail();
        $connex= DatabaseLinkers::getconnexion();
        $state=$connex->prepare("UPDATE Utilisateur SET nom=?,prenom=?,mdp=?,email=? WHERE idUtilisateur=?");
        $state->bindParam(1,$nom);
        $state->bindParam(2,$prenom);
        $state->bindParam(3,$mdp);
        $state->bindParam(4,$email);
        $state->bindParam(5,$idUtilisateur);
        $state->execute();
    }
     public static function getUser($email,$Mdp)
     {
         $idProfile=-1;
         $connex=DatabaseLinkers::getconnexion();
         $state=$connex->prepare("SELECT * FROM Utilisateur WHERE email=? AND mdp=? ");
         $state->bindParam(1,$email);
         $state->bindParam(2,$Mdp);
         $state->execute();
         $resultats = $state->fetchAll();
         foreach ($resultats as $lineResultat) 
         {
             $idProfile=$lineResultat["idUtilisateur"];
         }
         return $idProfile;
         
         
     }
    
}

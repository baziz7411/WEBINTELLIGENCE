# WEBINTELLIGENCE

## Le schéma de la base de données 
#### nom de la BDD : 
webintelligence
#### Noms des tables : 

**utilisateurs**  ( Email: varchar(50), Nom: Varchar(30), Prénom: Varchar(30), mdp:  Varchar(15) , telephone:  varchar(10), adresse:  varchar (100), codePostal:  varchar(7), ville:  varchar(50) )

**messages**   ( idMessage: int(11) A_I, messages:  varchar(1500), #EmailUser:  varchar(50) )

 **PS** :  #EmailUser: Foreign Key references to utilisateurs (Email)

### Fonctionnalités développées :

#### Authentification (Inscription et connection),
- formulaire de contact,
- possibilité de modifier les informations de l'utilisateur avant validation du formulaire de contact,
- enregistrement et affichage des messages avec les sauts de lignes,
- contrôle des champs.

### Accès administrateur 

**email**: admin@gmail.com 

**mot de passe*** : admin 

- liste des utilisateurs / messages,
- suppression des utilisateurs / messages (la suppression d'un compte utilisateur implique la suppression de tous ses messages ).
- Fonctionnalités à développer :
- Modification des informations de l'utilisateur par l'administrateur
- gestion des routes
- Hachage du mot de passe dans la base de données

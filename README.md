# Projet : Plateforme de partage de conseils et d'astuces pour la vie quotidienne

Nom de notre plateforme **Kanimy Tuto : tips and tricks**

Ce projet a pour but de créer une plateforme de partage de conseils et d'astuces pour la vie quotidienne entre utilisateurs.


## Table des Matières

- [Fonctionnalités](#fonctionnalités)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Problèmes et Suggestions](#problèmes-et-suggestions)
- [Auteurs](#auteurs)


## Fonctionnalités

### Barre de navigation
Nous avons mis en place une barre de navigation présente sur toutes les pages de la plateforme afin de permettre à l'utilisateur d'avoir toujours accès à certaines fonctionnalités.

#### accueil
Nous avons un lien qui renvoie à la page KanimyTuto_accueil.php pour permettre à l'utilisateur de retourner sur la page d'accueil facilement.
#### A propos de nous
Nous avons un lien qui renvoie à la page about pour permettre à l'utilisateur de connaitre les auteurs de la plateforme ou de les contacter.
#### Liste de conseils
Nous avons un lien qui renvoie à la page Page_conseil.php pour permettre à l'utilisateur d'accéder à la liste des conseils.
#### S'inscrire
Nous avons un lien qui renvoie à la page KanimyTuto_inscription.php pour permettre à l'utilisateur de s'inscrire.
#### Se connecter
Nous avons un lien qui renvoie à la page KanimyTuto_connection.php pour permettre à l'utilisateur de se connecter.
#### Barre de recherche
La barre de recherche a été implémentée en utilisant SQL et JSON pour permettre une flexibilité et une manipulation efficace des données.

-Usage :Ajout de mots clés selon la catégorie ou le sujet

### Page Accueil
- Astuces tendances du moment : Cette section permet à l'utilisateur de consulter les deux premiers conseils avec les meilleures notes.

### Inscription

- Formulaire d'inscription : La page comprend un formulaire d'inscription où les utilisateurs peuvent saisir leur nom d'utilisateur, leur adresse e-mail et leur mot de passe.
- Soumission du formulaire : Lorsque l'utilisateur remplit le formulaire et appuie sur le bouton "S'inscrire", les données saisies sont envoyées à un script PHP (inscription_process.php) pour être traitées. Ce script est responsable de la création du compte utilisateur dans la base de données. 

### Connexion
La page de connexion de Kanimy Tuto est essentielle pour les utilisateurs enregistrés sur la plateforme. Elle leur permet d'accéder à leur compte personnel en fournissant leurs identifiants, tels que leur nom d'utilisateur ou leur adresse e-mail, ainsi que leur mot de passe. 

### Soumission de conseil
#### Page de soumission
Si l'utilisateur n'est pas connecté il ne pourra pas soumettre de conseils.
-Formulaire de soumission : La page comprend un formulaire où les utilisateurs peuvent saisir le titre, la catégorie, soumettre une image et un conseil.
#### Récupération et transmission du conseil
Nous avons implémenté la soumission de commentaires en utilisant deux approches différentes : SQL et JSON.
##### Fichiers utilisés :
  - SQL : Le fichier commentaires.sql contient les instructions SQL nécessaires pour gérer les commentaires.
  - JSON : Le fichier commentaires.json est utilisé pour manipuler les commentaires au format JSON.
  - PHP : Le fichier submit_commentaire.php relie la base de données JSON et la page PHP de soumission de conseils.

## Installation

### Prérequis
Avant d'utiliser ce programme, assurez vous d'avoir les éléments suivants :

#### Langages et Environnement de développement
- HTML : créer et structurer le contenu des pages web.
- CSS : styliser et formater l'apparence des pages web.
- PHP : interagir avec les bases de données, gérer les sessions utilisateur, gérer les formulaires web
- SQL : manipuler et de gérer les données stockées dans une base de données
- JSON : manipuler et de gérer les données stockées dans une base de données
  
- Configuration du Serveur : Configurez votre serveur web local tel que Apache pour servir les fichiers du projet. Assurez-vous que PHP est correctement configuré et activé sur votre serveur.

#### Base de donnée
Avant de pouvoir utiliser les fonctionnalités nécessitant une base de données, vous devez disposer d'un serveur de base de données compatible avec PHP et exécuter les scripts SQL fournis pour créer les bases de données et les tables nécessaires.
Pour créer les bases de données et les tables nécessaires, il faut exécuter les fichiers SQL sur GitHub dans son espace phpMyAdmin.

### Étapes d'Installation
Suivez ces étapes pour installer et exécuter le projet sur votre machine locale :

 - Clonez le dépôt :
     Vous pouvez utiliser la commande suivante sur linux :
     
   git clone https://github.com/Myri23/Projet-de-D-veloppement-Web

     ou bien :
   
recopier le lien : https://github.com/Myri23/Projet-de-D-veloppement-Web
Sélectionnez **Code** en haut à droite, puis "Download ZIP"
Une fois le téléchargement terminé, extrayez les fichiers de l'archive ZIP


## Utilisation

Une fois le projet installé et configuré, ouvrez votre navigateur web et accédez à l'adresse suivante dans la barre d'adresse :
          http://localhost
          
Vous serez redirigé vers la page d'accueil du projet où vous pourrez commencer à explorer ses fonctionnalités.


## Problèmes et Suggestions

### Images
Nous avons la possibilité que les utilisateurs déposent des fichiers images  pour accompagner un conseil, seulement, lorsque l'utilisateur le soumet, le fichier ne se stocke pas dans la base de données.

### Notes
Nous avons eu des difficultés pour récupérer les notes et afficher la moyenne de celles ci.


## Auteurs

- Myriam Saadi
- Kanto AndriambololoNivo
- Inès Ribar

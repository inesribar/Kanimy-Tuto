CREATE DATABASE kanimy_tuto; /*créer une base de données nommée kanimy_tuto dans phpMyadmin en local*/
USE kanimy_tuto;

CREATE TABLE utilisateurs ( /*créer une table "utilisateurs" dans la base de données kanimy_tuto dans phpMyadmin en local*/
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateur VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

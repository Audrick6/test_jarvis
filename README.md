# Jarvis Legal Application : Technical Test

## **Installation du projet :**

  * Prerequis : PHP 8.0, MySQL
  * Cloner le repository : https://github.com/Audrick6/test_jarvis
  * Installer Composer : https://getcomposer.org/download/
  * Installer Symfony CLI : https://symfony.com/download

1. faire un _composer install_
2. Créer la base de données : _php bin/console doctrine:database:create_ (adapter la variable `DATABASE_URL` selon votre config, en particulier les identifiants)
3. Jouer les migrations : _php bin/console doctrine:migrations:migrate_
4. Lancer le serveur : _symfony server:start_

## **Utilisation de l'API :**

  * Lien vers l'API Doc :	localhost:8000/api
  
  * Création d'un User : **POST** _/api/users_ (seuls les champs _firstName_ et _lastName_ sont nécessaires, les autres champs sont gérés automatiquement)
  * Récupération d'un User : **GET** _/api/users/{id}_
  * Récupération de tous les Users : **GET** _/api/users_
  * Update d'un User : **PUT** _/api/users/{id}_ (seuls les champs _firstName_ et _lastName_ sont nécessaires)
  * Delete un User : **DELETE** _/api/users/{id}_
  
  * Log : Création d'un fichier dans le dossier _var/log/api_
  
  
## **Réalisation :**

 * Temps passé : environ 2-3h.
 
 Pour ce projet, j'ai utilisé un PC que je n'avais encore jamais utilisé pour du dev.
 
 La plus grosse partie du travail a été de préparer le projet : installation de WAMP (plusieurs soucis de ddl manquants), de PHPStorm, de git, création du compte github, création du projet symfony...
 
 J'ai choisi d'utilisé ApiPlatform, en effet, cela répond parfaitement au besoin énoncé dans le sujet du test. Cela permet de déployer une API rapidement, grâce à seulement quelques fichiers de configurations, tout en respectant les critères d'une API Rest 

# test_jarvis
Jarvis Legal application : technical test

Installation du projet :

  Prerequis : PHP 8.0, MySQL

  Cloner le repository : https://github.com/Audrick6/test_jarvis
  
  Installer Composer : https://getcomposer.org/download/
  Installer Symfony CLI : https://symfony.com/download

1. faire un composer install
2. Créer la base de données : php bin/console doctrine:database:create (adapter la variable DATABASE_URL selon votre config, en particulier les identifiants)
3. Jouer les migrations : php bin/console doctrine:migrations:migrate
4. Lancer le serveur : symfony server:start


Utilisation de l'API :

  Lien vers l'API Doc :	localhost:8000/api
  
  Création d'un User : POST /api/users (seuls les champs firstName et lastName sont nécessaires, les autres champs sont gérés automatiquement)
  Récupération d'un User : GET /api/users/{id}
  Récupération de tous les Users : GET /api/users
  Update d'un User : PUT /api/users/{id} (seuls les champs firstName et lastName sont nécessaires)
  Delete un User : DELETE /api/users/{id}

  Log : Création d'un fichier dans le dossier var/log/api
  
  
 Temps passé : environ 2-3h.
 Pour ce projet, j'ai utilisé un PC que je n'avais encore jamais utilisé pour du dev.
 La plus grosse partie du travail a été de préparer le projet : installation de WAMP (plusieurs soucis de ddl manquants), de PHPStorm, de git, création du compte github, création du projet symfony...
 J'ai choisi d'utilisé ApiPlatform, en effet, cela répond parfaitement au besoin énoncé dans le sujet du test. Cela permet de déployer une API rapidement, grâce à seulement quelques fichiers de configurations, tout en respectant les critères d'une API Rest 

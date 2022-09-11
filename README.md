# test_jarvis
Jarvis Legal application: technical test

Installation du projet :
  Prerequis : PHP 8.0, MySQL

  Cloner le repository : https://github.com/Audrick6/test_jarvis
  Installer Composer : https://getcomposer.org/download/
  Installer Symfony CLI : https://symfony.com/download

1. faire un composer install
2. Créer la base de données : php bin/console doctrine:database:create
3. Jouer les migrations : php bin/console doctrine:migrations:migrate
4. Lancer le serveur : symfony server:start


Utilisation de l'API :

  Lien vers l'API Doc :	localhost:8000/api
  
  Création d'un User : POST /api/users 
  Récupération d'un User : GET /api/users -> récupère tous les users; /api/users/{id} -> recupère le user ‘id‘
  Update d'un User : PUT /api/users/{id}
  Delete un User : DELETE /api/users/{id}


  Log : Création d'un fichier dans le dossier var/log/api
  
  
 Temps passé : environ 2h.
 Pour ce projet, j'ai utilisé un PC que je n'avais encore jamais utilisé pour du dev.
 La plus grosse partie du travail a été de préparer le projet : installation de WAMP (plusieurs soucis de ddl manquants), de git, creation du compte github,...
 J'ai choisi d'utilisé ApiPlatform, en effet, cela répond parfaitement au besoin énoncé dans le sujet du test. Cela 

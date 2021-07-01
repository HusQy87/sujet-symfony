# Symfony 
# Prérequis
- composer  https://getcomposer.org/Composer-Setup.exe
- Symfony https://get.symfony.com/cli/setup.exe
- php8.0 minimum
  - Ensuite dans php.ini activer les extensions suivantes
    - bz2, curl, ftp, intl, mbstring, mysqli, odbc, openssl, pdo_mysql, pdo_sqlite, sqlite3
- installer les dépendances `composer install`

# Exo 1 - Création de route et de template

Création d'une route `/meme/{id_meme}` qui va afficher un meme en particulier, utiliser un template pour l'afficher 


#Exo 2 - Entités et fixtures

Création d'une Entité "MemeProvider"

Nom du champs | type |
--- | --- | 
name| string(75) |
website | string(255) |
memes | relation -> Meme |
created_at | DateTime |


Ensuite crée une fixture qui va permettre d'ajouter des MemeProvider
#Exo 3 Commande 

Création d'une commmande ``app:add-meme`` qui va demander a l'utilisateur un nom et un lien et de choisir un MemeProvider puis enregistrer un nouveau meme


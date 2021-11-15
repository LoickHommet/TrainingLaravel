<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Pré-requis

Etape a suivre en local :

Vérifier si on a php sur notre systeme avec la comande php --version
Vérifier si on Mysql sur notre systeme
Vérifier su on a composer d'installer sur votre sysmtet avec la commande composer --version

## Inisialisation

Ouvrir votre terminal dans le dossier dans lequel vous initialiser votre projet.

Utiliser la commande composer install pour récupérer tous kes dépendances. 

Dans le cas ou le fichier .env na pas été créer il a un exemple nommer .envexemple, puis exécutez la commande: php artisan key:generate.

Vous devenz créer une base de donnée au nom suivant : training_laravel.

Changer le champ DB_DATABASE dans le fichier .env avec votre configuration Mysql

Utiliser de la commande php artisan migrate pour créer la base de données.

Il n'y a pas de systeme d'inscription donc il faut vous creer un compte dans la dbb.

Exécuté la commande php artisan db:seed pour remplir la base de données.

## Schema
![image](https://user-images.githubusercontent.com/59056586/141776115-0ccebbac-b286-405b-9d80-f43b27669a2c.png)


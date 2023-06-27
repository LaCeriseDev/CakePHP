# CakePHP Application Skeleton

# Journal d'apprentissage de CakePHP

Ce fichier readme.md documente mon apprentissage de CakePHP, un framework de développement web populaire et puissant. CakePHP suit le paradigme de développement MVC (Modèle-Vue-Contrôleur) et facilite la création d'applications web robustes et évolutives.

## Qu'est-ce que CakePHP ?

CakePHP est un framework open source écrit en PHP qui vise à simplifier le processus de développement d'applications web. Il suit une approche convention-over-configuration, ce qui signifie que le framework fournit une structure préétablie pour le développement, permettant aux développeurs de se concentrer sur la logique métier plutôt que sur la configuration.

CakePHP fournit une architecture bien définie, ce qui facilite la séparation des préoccupations et la réutilisation du code. Le modèle de développement MVC de CakePHP encourage une séparation claire entre les données, la logique métier et la présentation.

## Avantages de CakePHP

CakePHP offre de nombreux avantages pour le développement d'applications web :

- **Productivité accrue** : CakePHP permet aux développeurs de se concentrer sur la logique métier plutôt que sur les tâches répétitives de configuration, ce qui accélère le processus de développement.
- **Conventions de codage** : CakePHP suit des conventions de codage cohérentes, ce qui rend le code plus facile à lire et à maintenir. Les développeurs peuvent rapidement comprendre la structure d'une application CakePHP.
- **Sécurité** : CakePHP intègre des fonctionnalités de sécurité telles que la protection contre les failles XSS (Cross-Site Scripting) et CSRF (Cross-Site Request Forgery), contribuant ainsi à la sécurisation de l'application.
- **Large communauté** : CakePHP bénéficie d'une communauté active qui fournit des ressources, des plugins et un support pour résoudre les problèmes rencontrés lors du développement.

## Structure du journal

Ce journal d'apprentissage détaillera les étapes que j'ai suivies pour apprendre CakePHP à travers une série de tutoriels. Chaque jour, je résumerai mes progrès et fournirai des liens vers les tutoriels correspondants, ainsi que des illustrations pertinentes pour chaque étape.


## Jour 1 - 12 Juin 2023

### Tutoriel d'installation de l'environnement CakePHP

Dans ce tutoriel, j'ai appris à installer l'environnement de développement pour CakePHP en utilisant des lignes de commandes. Les étapes que j'ai suivies sont les suivantes :

1. Installation de Composer, un gestionnaire de dépendances PHP.
2. Création d'un nouveau projet CakePHP en utilisant la commande  
    si composer est installé  
    `composer create-project --prefer-dist cakephp/app [app_name]`  
     sinon en utilisant la commande suivante avec le fichier composer.phar  
    `php composer.phar create-project --prefer-dist cakephp/app [app_name]`  

    Ce qui générère une structuration de projet comme suit:  
    ![Structure de base](https://github.com/LaCeriseDev/CakePHP/blob/main/doc/img/base_structure.png)

3. Configuration du fichier `.app_local.php` dans le dossier config pour la connexion locale à la base de données et d'autres paramètres spécifiques à l'application.

Pour plus de détails, veuillez consulter le [Tutoriel d’un système de gestion de contenu](https://book.cakephp.org/4/fr/tutorials-and-examples/cms/installation.html)

### Tutoriel CMS - Création de la base de données

Dans ce tutoriel, j'ai créer la base de données pour mon système de gestion de contenu. J'ai suivi les étapes suivantes :

1. Création d'une nouvelle base de données MySQL appelée "cms_database".
2. Définition des tables nécessaires, notamment la table "articles" pour stocker les articles du CMS.
3. Configuration de la connexion à la base de données dans le fichier de configuration de CakePHP.

Pour plus de détails, veuillez consulter le [Tutoriel CMS - Création de la base de données](lien_vers_le_tutoriel_2).

### Tutoriel CMS - Création du Controller Articles

Dans ce tutoriel, j'ai appris à créer le controller "Articles" pour gérer les opérations liées aux articles du CMS. Les étapes suivies sont les suivantes :

1. Génération automatique du controller "Articles" à l'aide de la commande CakePHP.
2. Définition des différentes actions du controller, telles que l'affichage des articles, la création d'un nouvel article, la modification et la suppression d'articles existants.

Pour plus de détails, veuillez consulter le [Tutoriel CMS - Création du Controller Articles](lien_vers_le_tutoriel_3).

### Tutoriel CMS - Tags et Users

Dans ce tutoriel, j'ai appris à gérer les tags et les utilisateurs dans mon système de gestion de contenu. Voici les principales étapes suivies :

1. Création des tables "tags" et "users" dans la base de données.
2. Ajout des relations entre les tables "articles", "tags" et "users".
3. Implémentation des fonctionnalités pour ajouter des tags aux articles et gérer les utilisateurs du CMS.

Pour plus de détails, veuillez consulter le [Tutoriel CMS - Tags et Users](lien_vers_le_tutoriel_4).

Maintenant que j'ai terminé ces tutoriels, j

























![Build Status](https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
[![PHPStan](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square)](https://github.com/phpstan/phpstan)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 4.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit the environment specific `config/app_local.php` and setup the 
`'Datasources'` and any other configuration relevant for your application.
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.



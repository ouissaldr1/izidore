# Izidore's Reviews

Cette application permet aux utilisateurs d'Izidore de noter et de laisser des commentaires sur les vendeurs après avoir effectué un achat sur la plateforme.

## Fonctionnalités

- Ajout d'avis pour les vendeurs
- Affichage des avis triés par acheteur
- Mise en place de media queries à 85%
- Enregistrement et authentification des utilisateurs

## Stack technique

Symfony, JavaScript, PostgreSQL

## Installation

Pour commencer à utiliser l'application, suivez ces étapes :

Step -1- Cloner le projet en utilisant la commande

```bash
  git clone //////
```

Step -2- Accèder au répertoire du projet

```bash
  cd izidore
```

Step -3- Installer les dépendances en utilisant Composer

```bash
  composer install
```

Step -4- Configurer la base de données en éditant les paramètres de connexion dans le fichier `.env`

Step -5- Générer un nouveau fichier de migration.

```bash
  symfony console make:migration
```

Step -6- Exécuter les migrations

```bash
  symfony console doctrine:migrations:migrate
```

Step -7- Charger les fixtures dans la base de données

```bash
  symfony console doctrine:fixtures:load
```

Step -8-Exécuter le progrogramme

```bash
  symfony server:start
```

# ZushiRestAPI


# Presentation

Bienvenue, sur la RestAPI de l'équipe Zushi, cette api fut un défi de par le challenge que nous nous sommes lancé de la réaliser en Symfony avec API Platform.
Nous avons développé une Clean Architecture en modèle MVC avec l'ORM Doctrine assurant une interface sécurisée.

# Comment utiliser le projet 

Installer les dépendances du projets

```bash
composer update


```

Lancer la création de la database à partir du modèle ORM Doctrine

```bash
php bin/console doctrine:schema:create

```

Lancer la migration de la databse 

```bash

php bin doctrine:migration:migrate

php bin/console doctrine:migrations:diff

```

Update du schema

```bash

php bin/console doctrine:schema:update 
```


Lancer le projet 

```bash 

Symfony serve
```

# Alternative

insérer le fichier ZushiBase.sql dans phpmyadmin pour obtenir une base par défaut fonctionnelle.

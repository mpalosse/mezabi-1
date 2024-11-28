# Mezabi-1 ou une conception MVC perfectible

## 1. Travail préliminaire

### 1.1 Modification du fichier README

Modifiez le fichier README avec vos nom, prénom et groupe de TP.

> fix #1.1 Fichier README OK

### 1.2. Lancement de l'application

L'application permet :

- de consulter la liste des catégories d'articles ;
- de consulter la liste des produits d'une catégorie ;
- de modifier la désignation d'une catégorie.

Pour lancer l'application, ouvrez un terminal et depuis la racine du projet, exécutez les instructions suivantes :

```
$ docker compose up -d 
$ docker compose exec mezabi-1 composer update
```

Github va vous demander un token.
Vous pouvez en générer un via le site Github en suivant les étapes suivantes :
- clique sur votre Profil (en haut à droite)
- Settings
- <> Developper Settings (en bas à gauche)
- Personnal acces token > Tokens (classic) (en haut à gauche)
- Generetate new token > Generetate new token (classic)
- Note : nommez votre token (exemple : docker)
- Expiration > custom : sélectionnez une date après la fin de l'année scolaire (en juillet)
- Generate Token (tout en bas de la page)

Si vous utilisez une clé SSH pour vous authentifier sur Github, vous aurez besoin d'ajouter un token à la commande composer, avant d'executer composer update :
```
$ docker compose exec mezabi-1 composer config --global github-oauth.github.com <token>
```
où <token> est le code généré lors de la procédure de génération de token.


Accédez à l'application en utilisant cette URL :

`http://localhost:8080/mezabi/`

Vérifiez que l'application fonctionne comme attendu.

Pour l'accès aux logs de l'application :

```
$ docker logs mezabi-1-app --follow
```

> fix #1.2 Application fonctionne localement

## 2. Feature 2 : "Consultation des catégories et des articles"

### 2.1. Revue de code

Après avoir étudié le code source de l'application, répondez à la question suivante :

> Quel défaut de conception majeur comporte cette application sur la feature "Consultation des catégories et des articles"
> par rapport au _design pattern_ MVC ?

...  
...

> fix #2.1 Revue de code OK

### 2.2. Refactoring du code

Modifier le projet en vous inspirant de l'exemple "All users" pour rendre l'application pleinement conforme aux principes
MVC sur la feature 2.

> fix #2.2 Refactoring MVC


## 3. Feature 3 : "Édition des catégories"

### 3.1. Revue de code

Après avoir étudié le code source de l'application, répondez à la question suivante.

> Quels défauts de conception majeurs comporte cette application sur la feature "Édition des catégories" par rapport au _design pattern_ MVC ?

...  
...

> fix #3.1 Revue de code OK

### 3.2. Refactoring du code

Modifier le projet en vous inspirant des exemples "Hello World" et "All users" pour rendre l'application pleinement conforme aux principes
MVC sur la feature 3.

> fix #3.2 Refactoring MVC

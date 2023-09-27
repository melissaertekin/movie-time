# Programmation Web 2

## Information Générales
Vous pouvez vous connecter en tant qu'admin ou utilisateur. 

Pour connexion admin : 

    email: admin@gmail.com
    password: adminpassword
Pour connexion utilisateur, vous pouvez vous enregister ou utiliser directement ce compte:

    email: melissa@gmail.com
    password: melpassword

--> Dans le navbar dedans header avant de connecter vous aller voir:

MovieTime button que dirige vers index.php

Login (si vous etes connecté dans vos comte, il se transforme and logout)

Icon de traduction qui traduit le page, il fait aussi pour les descriptions des films

--> Si user est connectée :
Les memes choses sauf il y ajout un icon que represent le profil:

Si user est admin cette, il va directement à la page admin.
Sinon il va à la page profil

## File Structures

---

#### index.php
Il y a liste des toutes les films presents dans ma BDD

---
#### MovieDes
Tout les informations sur le film se trouve dans cette page qui est accessible par le button 'voir plus de detaille' sous l'image de films dans index.php 

---
## Assets
Il existe 4 repertoire dedans : css, icons, img, js, php

#### CSS
Toutes les fichiers css se trouve ici

#### Icons & Img
    Toutes les images et icons j'ai utilisé pour le projet se trouve ici

#### JS
Les fichiers JavaScript pour l'appelle ajax se trouve ici :

    --> ajax.php pour les appelles ajax utilisé dans le fichier admin.php
    
#### PHP
Toutes les fichiers nécessaires pour gestion de BDD et appelle ajax se trouve ici: 

    --> Database.php : Classe qui communique avec le bdd en utilisant le PDO
    --> Movie.php : Classe movie qui retourne l'objet Movie
    --> User.php : Classe user qui retourne l'objet User
    --> database.sqlite : Mon BDD
    --> server.php : utilisée pour l'appelle ajax 
-------------------------------
## Connection
Toutes les fichiers pour la gestion de connexion

    --> connect.js pour contrôle de format des entrées pour s'inscrire utilisée dans le fichier register.php
    
    --> login.php : Le formulaire pour se connecter, il poste à loginHandler.php

    --> loginHandler.php : La partie qui s'occupe de gestion de connexion :
         --> Ouverture de session
         --> Controle si compte existe :
            Si compte existe alors on test si password écrit est correct
            --> si password est correct alors on commence la session pour l'utilisateur
            --> si password n'est pas correct alors on recharge la page login.php pour que l'utilisateur réécrits le password.
            Si compte n'existe pas alors on va à la page register.php pour que l'utilisateur peut s'incrire
    
    --> register.php :  Le formulaire pour s'inscrire, il poste à registerHandler.php
    
    --> registerHandler.php : La partie qui s'occupe de gestion d'inscription :
        --> Il creer la table 'user' s'il n'existe pas dans le bdd
        --> Il recontrolle les donnes dans la formulaire avant l'inserer dans la bdd
        --> Il fait l'insersiton après la vérificatrice de données écrit par l'utilisateur
        --> Pris en charge de la faille de type injection
        --> Prise en charge de la faille XSS

    --> logout.php : termine le session et deconnecte l'utilisateur
#### JS
Le fichier JavaScript qui s'occupe de connexion se trouve ici

    --> connect.js pour contrôle de format des entrées pour s'inscrire utilisée dans le fichier register.php et login.php

----

## Les fichiers redondant à inclure
J'ai inclus le header dans le navbar directement

    --> header.php
    --> navbar.php
    --> footer.php


----
## Language
Les fichiers php pour la traduction se trouve ici

    --> english.php : les traductions en anglais
    
    --> french.php : les traductions en francais
---


# Projet de site web

## Intro

Ceci est un projet personnel afin de decouvrir les frameworks, leur force et les elements qui les composent afin de m'ameliorer dans le monde du developpement web.

L'idee de mon site serait d'avoir une page de garde dans laquelle on peut s'enregistrer / se connecter.
Puis dedans j'aurais la zone Dashboard qui associera tous mes petits projets a des liens.
    - Des pages web, des jeux en javascript, etc...
Ensuite un espace de discussion similaire a Messenger ou WhatsApp.
Une zone pour changer ses donnees utilisateur.
Un zone de recherche qui comparera avec des tags (liee avec mon Dashboard).

## Discussion
Utilisation d'Oracle pour la sauvegarde des donnees avec 4 Tables:
    + Utilisateurs : avec prenom, nom, travail et une image de profile, tous facultatifs
    + Discussion : les groupes, avec un nom, une description, une image de profile et un nombre de notifications
        - A faire : page de modification de donnees du groupe
    + Message : Associe a une discussion et un utilisateur, avec un contenu
    + Table pivot Discussion-User afin de determiner qui a tel groupe de discussion et quel role il a dedans

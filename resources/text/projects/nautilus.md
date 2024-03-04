Nautilus est une application web d’organisation de sessions de plongées sous-marines. 
Nous l’avons réalisée avec une équipe de 10 étudiants, sur 5 jours en méthode Agile.

### Les fonctionnalités de l’application comprennent :

- En tant qu'adhérent :
    - inscription à une session de plongée
    - visualisation des sessions de plongées prévues, et de celles dont on est inscrit

- En tant que directeur de session de plongée :
    - gestion de ses sessions de plongées (inscrire un plongeur, répartition de plongeurs dans des palanquées)
    - édition de fiches de sécurité et génération de fichiers pdf

- En tant que responsable du club de plongée (une seule personne) :
    - gestion les rôles des adhérents (directeur de session, pilote, sécurité surface)
    - création et modification des sessions de plongées

### Pour ma part, dans ce projet je me suis occupé :
           
- de la base de données
    - concevoir la base de données pour qu’elle puisse supporter l’application
    - la construire sur un serveur MySQL
    - la modifier à mesure que nous remarquions des ajustements à apporter
            
- de la mise en place de nos environnements de développement
    - c’était notre premier contact avec le framework Laravel, nous avons donc du apprendre à mettre en place un environnement local de développement, sachant que notre environnement de production était différent d’une arborescence Laravel classique et que nous ne pouvions pas la modifier (on pouvait seulement téléverser des fichiers, on ne pouvait pas lancer de commandes sur les serveurs)
            
- de la génération de fiches de sécurité
    - j’ai d’abord utiliser les langages HTML et CSS pour construire les fiches sous forme de pages web
    - puis j’ai utilisé la librairie php html2pdf pour convertir cette vue en fichier pdf stocké sur le serveur
    - enfin, j’ai construit une vue permettant à un directeur de plongée d’éditer les informations de la fiche avant de la générer en pdf
        
### Comptes pour tester l'application :

- plongeur :
    - email : jane.smith@gmail.com
    - mot de passe : motdepasse
- directeur de plongée :
    - email : johnathan.crockett@gmail.com
    - mot de passe : motdepasse
- responsable du club de plongée :
    - email : mathieu.leray@gmail.com
    - mot de passe : motdepasse
        
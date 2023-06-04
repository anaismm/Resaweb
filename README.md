# Resaweb
# Fichier explications hébergement du site avec XAMPP

1. Installer XAMPP en allant le télécharger sur le site officiel puis l'ouvrir
2. Aller dans le dossier C://xampp/htdocs/ et y déposer mon dossier resaweb contenant tous les fichiers de mon site web
3. Lancer xamp et accéder à phpmyadmin grâce à l'url 127.0.0.1/phpMyAdmin et se connecter avec l'identifiant root et sans mot de passe 
4. Créer un base de donnée et lui donner un nom comme par exemple michel_resaweb
5. Puis aller dans l'onglet import et ouvrir le fichier sql qui se trouve dans mon dossier resaweb et qui continent les données que j'avais exportées depuis ma base de données sur o2swicth
6. Renseigner l'utilisateur root dans connexion.php et ne pas mettre de mot de passe car nous n'en avion spas mis pour nous connecter à phpMyAdmin
7. Si besoin, créer un utilisateur sous phpMyAdmin, sous l'onglet privilèges, et lui ajouter tous le sprivilèges sauf ceux d'administration
8. Dans le cas où nous avons créé un utilisateur, renseigner la combinaison login/mot de passe dans connexion.php
9. Accéder à mon site via : - http://127.0.0.1/resaweb
			ou  - http://localhost/resaweb



Lien vers mon site: https://resaweb.michel.butmmi.o2switch.site
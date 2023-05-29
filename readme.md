#Créer un site web dynamique en utilisant le cadriciel Laravel
Félicitations, vous avez reçu un nouveau mandat et vous souhaitez impliquer toutes les connaissances que vous avez acquises dans le cours Cadriciel Web.
Le mandat est de créer un site Internet pour recueillir de l'information auprès des étudiants du Collège Maisonneuve, et possiblement à l'avenir, de construire un réseau social pour eux.
La première étape consiste à rassembler les informations, remplir la base de données avec des données aléatoires et créer les interfaces fonctionnelles pour visualiser, saisir, mettre à jour et supprimer les étudiants. 
Votre base de données initiale aura 2 tables : Étudient (id, nom, adresse, phone, email, date de naissance, ville_id) et ville (id, nom).
1. En utilisant les lignes de commande, créer un nouveau projet Laravel nommée Maisonneuve{votre matricule} 
2. En utilisant les lignes de commande, créer les modèles 
3. En utilisant les lignes de commande, créer les tables 
4. En utilisant les lignes de commande, saisir 15 nouvelles villes
5. En utilisant les lignes de commande, saisir 100 nouveaux étudient. Pour les questions 4 et 5, effectuez une recherche des propriétés de "Factory" pour remplir des valeurs telles que des noms, des adresses, des téléphones, etc. (pas de phrases ou de texte aléatoires).
6. En utilisant les lignes de commande, créer les contrôleurs 
7. Créez votre layout.blade avec vous CSS, vous devez importer bootstrap (ou du CSS personnalise) et le concevoir selon vos préférences. 
8. Travailler avec bootstrap (ou du CSS personnalise) pour respecter les concepts d'ergonomie, soyez créatif.
9. Créer un contrôleur “index” et une vue, pour afficher tous les étudiants, avec un lien pour sélectionner l'étudiant et le mettre à jour. 
10. Créer un contrôleur “create” et une vue, pour saisir un nouvel étudiant. Le formulaire doit avoir un champ “select” avec toutes les villes qui viennent de la base de données.
11. Créer un contrôleur “show” et une vue, pour afficher un étudiant sélectionné.
12. Créer un contrôleur “edit” et une vue, pour afficher un étudiant sélectionné dans un formulaire et le mettre à jour.
13. Créer un contrôleur “destroy” pour supprimer un étudiant sélectionné. (1 pt)
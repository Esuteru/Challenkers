Test technique Twig
===================

I) WEB
1) Choix d'un serveur
- La première page permet de choisir le serveur que l'on veut (qui est présent dans la BDD)
- On peut aussi voir tous les membres du jeu, toutes guildes comprises

2) Choix de la guilde
Permet de choisir une des guildes (toujours provenant la base de données) du serveur

3) Informations sur la guilde
Contient le nom, le nombre de membres, le nombre de points total et la moyenne de points de la guilde
Le menu à gauche permet de naviguer dans les différents classements
- Retour à la liste des serveurs : revient qur la première page
- Liste des membres : liste complète de tous les membres de la guilde
- Membres les plus méritants : les membres de la guilde classés par points de contribution (décroissants)
- Membres les plus forts : les membres de la guilde classés par level
- Classement par Rang (détaillé en partie 4)
- Classement par Classe (détaillé en partie 5)

4) Classement par Rang
Classe les membres de la guilde les plus méritants en fonction de leur rang
- S : + 700pts
- A : entre 500 et 699pts
- B : entre 300 et 499pts
- C : - de 300 pts


5) Classement par classe
Classe les membres de la guilde les plus méritants en fonction de leur classe
- Archer
- Chevalier
- Healer
- Mage
- Tank

II)
Mises à part les instructions données, j'ai ajouté un champs idMaitreGuilde dans l'entité Guilde, mais je n'ai
malheureusement pas réussi à l'afficher

III) REMARQUES
Pour une raison que j'ignore, parfois les liens ne fonctionennt pas mais se remettent à fonctionner
si on corrige l'URL une fois.

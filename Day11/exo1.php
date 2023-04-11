<!DOCTYPE html>
<html lang="en">
<head>
    <? require_once('include/head.php') ?>
    <title>Page Inscription dans un club de sport</title>
</head>
<body>
    <div class="container">
        <? require('include/header.php')?>
    <div class="wrapper">
        <h3>Créer le formulaire à l'aide des balises html 5</h3>
            <ul>
                <li class="li_circle">
                    <p>
                        Les champs doivent être obligatoirement renseignés,
                    </p>
                    <img src="img/daily_coding_april_day11_exo1.png" alt="capture ecran formulaire" width="50%">
                </li>
                <li class="li_circle"><p>Le champ nom prend le focus dès le chargement de la page</p></li>
                <li class="li_circle"><p>Le nom doit être en majuscule</p></li>
                <li class="li_circle"><p>Le prénom doit commencer par une lettre en majuscule les autres lettres doivent etre en minuscule</p></li>
                <li class="li_circle"><p>Le champ date de naissance doit être sou sl aforme : jj/mm/aaaa</p></li>
            </ul>
    </div>
    <hr>
    <div class="wrapper">
        <h3>Créer une feuille de style afin d'appliquer le style suivant sur le formulaire : </h3>
            <ul>
                <li class="li_circle"><p>Legend : couleur bleu, taille 14px, police arial avec une ombre pour le texte</p></li>
                <li class="li_circle"><p>La première colonne du tableau : couleur bleuviolet, taille 10px, police arial</p></li>
                <li class="li_circle"><p>La dernière colonne du tableau : couleur rouge, police arial</p></li>
                <li class="li_circle"><p>Les inputs : un arrière plan avec couleur aquamarine, bordure avec une couleur bleu avec des coins arondis,</p></li>
                <li class="li_circle"><p>au passage de la souris sur un input, la couleur de l'arrière plan sera changée en bisque</p></li>
                <li class="li_circle"><p>Lorsqu'un champ prend le focus, la couleur de l'arrière plan sera aliceblue. La couleur de l'écriture sera black</p></li>
                <li class="li_circle">
                    <p>
                        au passage de la souris sur les boutons de dimension change automatiquement ainsi que les types de bordures,
                    </p>
                    <img src="img/DailyCoding_April_day11_exo2.png" alt="capture ecran formulaire" width="50%">
                </li>
            </ul>
    </div>
    <hr>
    <div class="wrapper">
        <h3>Rajouter une fonction javascript permettant de tester que les deux mot de passe sont bien identiques :</h3>
            <p>
                <img src="img/dailyCoding_April_Day11_exo3.png" alt="capture ecran formulaire" width="50%">
            </p>
    </div>
    <div class="answer">
        <h3>Let's Go</h3>
        <form action="" method="post">
            <fieldset>
            <legend>Inscription</legend>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="" required autofocus>
            <br>
            <label for="firstname">Prenom</label>
            <input type="text" name="firstname" id="" required>
            <br>
            <label for="dateBirth">Date de naissance</label>
            <input type="date" name="dateBirth" id="" required>
            <!-- <input type="text" name="firstname" id=""> -->
            <br>
            <label for="pass">Mot de passe</label>
            <input type="password" name="pass" id="" required>
            <br>
            <label for="passConfirm">Confirmer mot de passe</label>
            <input type="password" name="passConfirm" id="" required>
            <br>
            <div class="btn">
                <input type="button" value="Valider">
                <input type="button" value="Annuler">
            </div>
            </fieldset>
        </form>

    </div>
    <? require('include/footer.php');?>
    </div>
</body>
</html>
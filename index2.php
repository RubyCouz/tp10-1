<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>TP 1</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <div class="container">
            <?php
            if (isset($_POST['submit'])) { // si des données sont envoyés
                ?>
                <h2>Vos informations</h2>                    
                <p>Nom : 
                    <?php
                    if (!empty($_POST['lastname'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['lastname']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre nom'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Prénom : 
                    <?php
                    if (!empty($_POST['firstname'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['firstname']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre prénom'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Date de naissance : 
                    <?php
                    if (!empty($_POST['birthdate'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['birthdate']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre date de naissance'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Lieu de naissance : 
                    <?php
                    if (!empty($_POST['birthCountry'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['birthCountry']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre lieu de naissance'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Nationalité : 
                    <?php
                    if (!empty($_POST['nationality'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['nationality']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre nationalité'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Adresse : 
                    <?php
                    if (!empty($_POST['adress'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['adress']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre adresse'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Email : 
                    <?php
                    if (!empty($_POST['email'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['email']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre email'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Numéro de téléphone : 
                    <?php
                    if (!empty($_POST['phone'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['phone']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre numéro de téléphone'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Diplôme : 
                    <?php
                    if (!empty($_POST['degree'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['degree']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez choisir un diplôme'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Numéro pôle emploi : 
                    <?php
                    if (!empty($_POST['poleEmploiNumber'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['poleEmploiNumber']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre numéro pôle emploi'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Numéro de badge : 
                    <?php
                    if (!empty($_POST['badgeNumber'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['badgeNumber']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir votre numéro de badge'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Liens codecademy : 
                    <?php
                    if (!empty($_POST['codecademyLink'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['codecademyLink']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez saisir un lien codecademy'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Si vous etiez un super héros : 
                    <?php
                    if (!empty($_POST['heroQuestion'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['heroQuestion']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez remplir le champs requis'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Vos "hacks" : 
                    <?php
                    if (!empty($_POST['hackQuestion'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            echo $_POST['hackQuestion']; // affichage des données
                            ?>
                        </span>
                        <?php
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez remplir le champs requis'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <p>Votre expérience : 
                    <?php
                    if (!empty($_POST['experience'])) { //si le champs de saisie contient des informations
                        ?>
                        <span class="valid">
                            <?php
                            ?>
                        </span>
                        <?php
                        echo $_POST['experience']; // affichage des données
                    } else {
                        ?>
                        <span class="error">
                            <?php
                            echo 'Veuillez renseigner votre expérience'; //message d'erreur en cas d'absence d'info
                        }
                        ?>
                    </span>
                </p>
                <?php
            } else {
                ?>
            </div>
            <div class="container">
                <form action="index2.php" method="POST">
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="lastname">Nom :</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="firstname">Prénom :</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Prénom">
                            </div>                        
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="birthdate">Date de naissance :</label>
                                <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Date de naissance">
                            </div>                        
                        </div>
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="birthCountry">Pays de naissance :</label>
                                <input type="text" name="birthCountry" class="form-control" id="birthcountry" placeholder="Pays de naissance">
                            </div>                        
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="nationality">Nationalité :</label>
                                <input type="text" name="nationality" class="form-control" id="nationality" placeholder="Nationalité">
                            </div>

                        </div>
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="adress">Adresse :</label>
                                <input type="text" name="adress" class="form-control" id="adress" placeholder="Adresse">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12-md-6-lg-6">

                            <div class="form-group">
                                <label for="phone">Téléphone :</label>
                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="degree">Diplôme :</label>
                                <select name="degree" class="custom-select" id="degree">
                                    <option selected>Sans</option>
                                    <option value="1">Bac</option>
                                    <option value="2">Bac+2</option>
                                    <option value="3">Bac+3</option>
                                    <option value="3">Supérieur</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="poleEmploiNumber">Numéro pôle emploi :</label>
                                <input type="text" name="poleEmploiNumber" class="form-control" id="poleEmploiNumber" placeholder="Numéro pôle emploi">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="badgeNumber">Numéro de badge :</label>
                                <input type="text" name="badgeNumber" class="form-control" id="badgeNumber" placeholder="Numéro de badge">
                            </div>
                        </div>
                        <div class="col-sm-12-md-6-lg-6">
                            <div class="form-group">
                                <label for="codecademyLink">Liens codecademy :</label>
                                <input type="text" name="codecademyLink" class="form-control" id="codecademyLink" placeholder="Liens codecademy">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-12-lg-12">
                            <div class="form-group">
                                <label for="heroQuestion">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label>
                                <textarea name="heroQuestion" class="form-control" id="heroQuestion" placeholder="Tapez votre réponse ici"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-12-lg-12">
                            <div class="form-group">
                                <label for="hackQuestion">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                <textarea name="hackQuestion" class="form-control" id="hackQuestion" placeholder="Tapez votre réponse ici"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-sm-12-md-12-lg-12">
                            <div class="form-group">
                                <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                <textarea name="experience" class="form-control" id="experience" placeholder="Tapez votre réponse ici"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <button id="trigger" type="submit" name="submit" class="btn" data-toggle="modal" data-target="#info">Valider</button>
                </form>           
            </div>
            <?php
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
$connexion = new PDO("mysql:host=127.0.0.1;dbname=hajar_db", "root", "");

if (isset($_POST['valider'])) {

    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password'])) {

        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['password']);

        if (strlen($_POST['password']) < 7) {
            $message = "Mot de passe trop court";

        } elseif (strlen($nom) > 50 || strlen($prenom) > 50) {
            $message = "Nom ou prénom trop long";

        } else {

            $testmail = $connexion->prepare("SELECT * FROM users WHERE email = ?");
            $testmail->execute(array($email));

            if ($testmail->rowCount() == 0) {

                $insert = $connexion->prepare("INSERT INTO users(nom, prenom, email, password) VALUES(?, ?, ?, ?)");
                $insert->execute(array($nom, $prenom, $email, $mdp));

               header("Location: login.php");
                exit();

            } else {
                $message = "Email déjà utilisé";
            }
        }

    } else {
        $message = "Remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscri.css">
    <title>Formulaire d'inscription</title>
</head>

<body>
     <form method="POST">

    <label>Nom</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prénom</label><br>
    <input type="text" name="prenom" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mot de passe</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="valider">S'inscrire</button>

    <p>
        <?php
        if(isset($message)){
            echo $message;
        }
        ?>
    </p>

</form>
</body>
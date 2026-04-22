<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit" name="valider">Se connecter</button>

    <p>
        <?php
        if(isset($message)){
            echo $message;
        }
        ?>
    </p>

    vous n'avez pas de compte? <a href="inscri.php">inscription</a>
   
</form>
</body>
</html>
<?php
session_start();

$connexion = new PDO('mysql:host=127.0.0.1;dbname=hajar_db', 'root', '');

if (isset($_POST['valider'])) {

    if (!empty($_POST['email']) AND !empty($_POST['password'])) {

        $email = htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);

        $req = $connexion->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $req->execute(array($email, $password));

        if ($req->rowCount() == 1) {

            $user = $req->fetch();

            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            header("Location:site.php");
            exit();

        } else {
            $message = "Email ou mot de passe incorrect";
        }

    } else {
        $message = "Veuillez remplir tous les champs";
    }
}




if(isset($_POST['se_connecter'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    if($email == "" && $password == "") {
        header("Location: site.php"); 
        exit();
    } else {
        echo "Login incorrect";
    }
}

?>
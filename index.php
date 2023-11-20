<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$prenom = "je sais pas comment tu t'appelles";
$secret = "le sens de la vie c'est sdkjfhqsldfhlqnvlksqflkjqhfdsl";
$userAutorise = "michel";
$motDePasse = "motdepassedemichel";
$contenu = "entre le bon username et mot de passe pour que te sois révélé le secret";

//si bon username mais mauvais mot de passe, afficher "mauvais mot de passe"
//si mauvais username, afficher "déso je te connais pas toi la"
//si bon username et bon mot de passe, afficher le secret

if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}


?>

<h2>Hello <?= $prenom ?> </h2>

<form method="get" action="">

    <input type="text" name="prenom" id="">
    <button type="submit">OK</button>
&
</form>

<hr>
<hr>
<form action="">
    <input placeholder="username" type="text" name="username" id="">
    <input placeholder="password" type="password" name="password" id="">
    <button type="submit">OK</button>
</form>
<p><?= $contenu ?></p>
</body>
</html>
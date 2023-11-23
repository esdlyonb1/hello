<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$prenom = "je sais pas comment tu t'appelles";

//si bon username mais mauvais mot de passe, afficher "mauvais mot de passe"
//si mauvais username, afficher "déso je te connais pas toi la"
//si bon username et bon mot de passe, afficher le secret

if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}

// require_once
?>

<h2>Hello <?= $prenom ?> </h2>

<form method="get" action="">

    <input type="text" name="prenom" id="">
    <button type="submit">OK</button>

</form>

<form action="" method="post">
    <input type="text"placeholder="coucou" name="exemple" id="">
    <button type="submit">OK</button>
</form>
<?php

if(isset($_POST['exemple']))
{
    var_dump($_POST['exemple']);

}else{

    echo "formulaire pas encore posté";
}

$secret = "le sens de la vie c'est sdkjfhqsldfhlqnvlksqflkjqhfdsl";
$userAutorise = "michel";
$motDePasse = "motdepassedemichel";
$contenu = "entre le bon username et mot de passe pour que te sois révélé le secret";



$etudiants = "y'a personne";


if(isset($_POST['username'])){
    $usernameUtilisateur = $_POST['username'];

   if( $usernameUtilisateur == $userAutorise)
   {
       $contenu = 'bon username, je te connais';

       if(isset($_POST['password']))
       {
           $motDePasseUtilisateur = $_POST['password'];

            if($motDePasseUtilisateur == $motDePasse){

                $contenu = $secret;
                $etudiants = afficherInfos();
            }else{
                $contenu = "mauvais mot de passe michel";
            }

       }

   }else{
       $contenu = "déso, toi je te connais pas";
   }

}

function afficherInfos(){
    $tableauEtudiants = [
        "pierre" => 19,
        "natan"=> 19,
        "raphael"=> 18,
        "mey"=>18,
        "malakaya"=> 21

    ];
    $infos = "";

    foreach($tableauEtudiants as $prenom => $age)
    {
        $template = "
    <div class='etudiant'>
        <h2>${prenom}</h2>
        <p><strong>${age} ans</strong></p>
    </div>";

        $infos .= $template;
    }





    return $infos;
}

?>
<hr>
<hr>
<form method="post" action="">
    <input placeholder="username" type="text" name="username" id="">
    <input placeholder="password" type="password" name="password" id="">
    <button type="submit">OK</button>
</form>
<p><?= $contenu ?></p>
<div class="etudiants">

    <?= $etudiants ?>

</div>
</body>
</html>
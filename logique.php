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

$mots = ["coucou", "carotte", "salut"];

foreach($mots as $mot)
{
    //  echo $mot;
}

//echo "<hr>";
$motsComplexes =
    [
        "coucou"=>"politesse",
        "carotte"=>"legume",
        "salut"=> "politesse"
    ];

foreach($motsComplexes as $cle => $mot)

{
    //  echo $mot;
}
$prenom = "je sais pas comment tu t'appelles";


if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}

?>
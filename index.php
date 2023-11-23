<?php

require_once "logique.php";

?>


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

<h2>Hello <?= $prenom ?> </h2>

<form method="get" action="">

    <input type="text" name="prenom" id="">
    <button type="submit">OK</button>

</form>

<form action="" method="post">
    <input type="text"placeholder="coucou" name="exemple" id="">
    <button type="submit">OK</button>
</form>

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


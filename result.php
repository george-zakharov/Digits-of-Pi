<?php
//Require App file
require 'app/determiner.php';
//Set new object
$determiner = new Determiner();
//Check $_POST and set parameter to setDigits()
if ($_POST['number']) {
    $determiner->setDigits($_POST['number']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>
    <h1 class="lead_header">Your result</h1>
    <!-- Echo result -->
    <p class="center_block"><?php $determiner->getResult(); ?></p>
    <a href="index.php"><p class="center_block">Go back</p></a>
</body>
</html>

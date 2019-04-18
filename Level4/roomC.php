<?php

use GuzzleHttp\Client;

require_once '../vendor/autoload.php';
$client = new GuzzleHttp\Client();

$res = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$d=json_decode($res->getBody());

$result = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$c=json_decode($result->getBody());

$resulta = $client->request('GET', "http://easteregg.wildcodeschool.fr/api/characters/random");
$b=json_decode($resulta->getBody());
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="template_page.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Level 2</title>
</head>

<body>
<div id="top">

</div>
<hr/>
<div id="bottom">
    <div class="card mt-2 text-center offset-5" style="width: 14em">
        <div class="card-body">
            <p> <?php echo $d->name?> te parle</p>
        </div>
    </div>

    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <p> <?php echo $d->name?> : J'en ai marre de cette planete je me tire viens avec moi le lapins de paques n'as qu'a ce débrouiller tous seul ! Surtout qu'hier il était avec <?php echo $c->name?></p>
        </div>
    </div>
    <div class="card bg-dark text-white border 1px mt-4 offset-2" style="width: 60em">
        <div class="card-body">
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em">A</button>
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em">B</button>
            <button type="button" class="btn btn-outline-success mt-3 offset-4" style="width: 18em">C</button>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success mt-3 offset-5" style="width: 14em">Valider</button>
</div>
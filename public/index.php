<?php
//
require '../vendor/autoload.php';

use Framework\App;


$app = new App();
$app->run();


$board = [
    'id' => 1,
    'name' => 'jeremie',
    'description' => "Une description tout a fait qualitative !"
];

dd($board);


//echo("hello world!!!");

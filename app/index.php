<?php

define('APPPATH', $_SERVER['DOCUMENT_ROOT'].'/');

require 'vendor/autoload.php';
require 'routes/apiplayer.php';

_kuri();

function index_kuri(){

    $tracks =  api_playlist_kuri();

   include 'views/player.phtml';

}




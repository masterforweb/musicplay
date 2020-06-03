<?php

function api_playlist_kuri(){

    $tracks = array();

    $folder = APPPATH.'pub/music/Saxophone';
    $baseurl = 'pub/music/Saxophone/';

    $files = scandir($folder);

    foreach ($files as $file){
        if ($file !== '.' && $file !== '..'){
            $currtrack['url'] = $baseurl.$file;
            $currtrack['name'] =  $file;
            $tracks[] = $currtrack;
        }
    }

    return $tracks;



   
}
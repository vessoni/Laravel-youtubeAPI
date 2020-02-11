<?php

use GuzzleHttp\Client;



Route::get('/', function () {
$apiData = [
    'baseUrl' => 'https://www.googleapis.com/youtube/v3/videos?',
    'chart' => 'mostPopular',
    'part' => 'snippet,statistics',
    'type' => 'video',
    'order' => 'viewCount',
    'maxResults' => 12,
    'fields'=> 'items(id,snippet,statistics)',
     'q' => '',
    'key' => 'AIzaSyCpwfozr6iK7gqrEL0IIPeVfY7ExGPNg_Y',
];

    $client = new Client([
        'base_uri' => $apiData['baseUrl'].'chart='.$apiData['chart'].'&part='.$apiData['part'].'&type='.$apiData['type'].
        '&order='.$apiData['order'].'&q='.$apiData['q'].'&maxResults='.$apiData['maxResults'].'&fields='.$apiData['fields'].'&key='.$apiData['key'],
    ]);

    $response = $client->request('GET', '');
    $posts =  json_decode(trim($response->getBody()->getContents()), TRUE);


    return view('posts.index', compact('posts'));
});

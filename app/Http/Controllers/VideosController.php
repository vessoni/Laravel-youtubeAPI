<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class VideosController extends Controller
{
    public function index(){
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
            $videos =  json_decode(trim($response->getBody()->getContents()), TRUE);


            return view('videos.index', compact('videos'));
    }

    public function show($id){

        $apiData = [
            'baseUrl' => 'https://www.googleapis.com/youtube/v3/videos?',
            'id' => $id,
            'part' => 'snippet,statistics',
            'type' => 'video',
            'order' => 'viewCount',
            'maxResults' => 12,
            'fields'=> 'items(id,snippet,statistics)',
             'q' => '',
            'key' => 'AIzaSyCpwfozr6iK7gqrEL0IIPeVfY7ExGPNg_Y',
        ];

            $client = new Client([
                'base_uri' => $apiData['baseUrl'].'id='.$apiData['id'].'&part='.$apiData['part'].'&type='.$apiData['type'].
                '&order='.$apiData['order'].'&q='.$apiData['q'].'&maxResults='.$apiData['maxResults'].'&fields='.$apiData['fields'].'&key='.$apiData['key'],
            ]);

            $response = $client->request('GET', '');
            $video =  json_decode(trim($response->getBody()->getContents()), TRUE);

            $video = $video['items'][0];
            // echo '<pre>';
            // var_dump($video);
            // echo '</pre>';
            // return null;

            return view('videos.show', compact('video'));
    }
}

<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Videos {

    public function all(){
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
            return json_decode(trim($response->getBody()->getContents()), TRUE);

    }

    public function find($id){


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

            return $video['items'][0];
    }

    public function search($id){

        $apiData = [
            'baseUrl' => 'https://www.googleapis.com/youtube/v3/search?',
            'part' => 'snippet',
            'q' => $id,
            'maxResults' => 12,
            'type' => "video",
            'key' => 'AIzaSyCpwfozr6iK7gqrEL0IIPeVfY7ExGPNg_Y',
        ];


            $client = new Client([
                'base_uri' => $apiData['baseUrl'].'part='.$apiData['part'].'&q='.$apiData['q'].'&maxResults='.$apiData['maxResults'].'&type='.$apiData['type'].'&key='.$apiData['key'],
            ]);




            $response = $client->request('GET', '');
            return json_decode(trim($response->getBody()->getContents()), TRUE);
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Videos;

class VideosController extends Controller
{
    protected $videos;

    public function __construct(Videos $videos)
    {
        $this->videos = $videos;
    }

    public function index(){

            $videos = $this->videos->all();

            return view('videos.index', compact('videos'));
    }

    public function show($id){

            $video = $this->videos->find($id);

            return view('videos.show', compact('video'));
    }

    public function find($id){

            $videos = $this->videos->search($id);

            return view('videos.find', compact('videos'));
    }
}

<?php

namespace App\Controllers;

use Config\Services;

use App\Controllers\BaseController;
use App\Controllers\Service\MovieViewService;


class MoviesController extends BaseController
{
    public $APIKEY;

    public function __construct()
    {
        $this->APIKEY = Services::getTokenTMDB();
    }

    public function getMovies()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/now_playing', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->APIKEY,
                'accept' => 'application/json',
            ],
        ]);

        $res = $response->getBody();
        $data = json_decode($res, true);
        return $return = $data['results'];
    }

    public function getGenres()
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/genre/movie/list', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->APIKEY,
                'accept' => 'application/json',
            ],
        ]);

        $res = $response->getBody();
        $data = json_decode($res, true);
        return $return = $data['genres'];
    }

    public function searchMovies()
    {
        $getSearch = $this->request->getPost('q');
        $client = \Config\Services::curlrequest();
        // $search = 'avatar';
        $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie?query=' . $getSearch, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->APIKEY,
                'accept' => 'application/json',
            ],
        ]);

        $res = $response->getBody();
        $data = json_decode($res, true);
        $return = $data['results'];
        return $this->response->setJSON($return);
    }

    public function index()
    {
        $getMovie = $this->getMovies();
        $getGenres = $this->getGenres();

        $movies = new MovieViewService($getMovie, $getGenres);

        return view('movies', [
            'playingMovie' => $movies->nowPlayingMovies()
        ]);
    }
}

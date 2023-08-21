<?php

namespace App\Controllers\Service;


class MovieViewService
{
    public $nowPlayingMovies;
    public $genres;

    public function __construct($nowPlayingMovies, $genres)
    {
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function nowPlayingMovies()
    {
        return $this->formatMovies($this->nowPlayingMovies);
    }


    private function formatMovies($movies = array())
    {
        return array_map(function ($movie) {

            $formattedGenres = [];
            $genreIdToNameMap = [];

            /**
             * looping genres
             */
            foreach ($this->genres as $genre) {
                $genreIdToNameMap[$genre['id']] = $genre['name'];
            }

            /**
             * looping genre_ids
             */

            foreach ($movie['genre_ids'] as $val) {
                if (isset($genreIdToNameMap[$val])) {
                    $formattedGenres[] = $genreIdToNameMap[$val];
                }
            }

            $formattedGenres = implode(', ', $formattedGenres);

            return [
                'id' =>  $movie['id'],
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => $movie['release_date'],
                'title' => $movie['title'],
                'overview' => $movie['overview'],
                'genre_ids' => $movie['genre_ids'],
                'genres' => $formattedGenres
            ];
        }, $movies);
    }
}

<?php

class movie {
    public $title;
    public $genre;
    public $original_language;
    public $overview;

    public function __construct($title, $genre, $original_language, $overview)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->original_language = $original_language;
        $this->overview = $overview;
    }

    public function getMovieInfo() {
        echo $this->title . ' ' . $this->genre . ' ' . $this->original_language . ' ' . $this->overview . '<br/>' . '<br/>';
    }
}
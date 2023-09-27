<?php

class Movie {
    private int $id;
    private string $title_fr;
    private string $description_fr;
    private string $title_en;
    private string $description_en;
    private string $img_link;
    private int $year;
    private int $duration;
    private string $genre;
    private string $writer;
    private string $director;
    private string $cast;
    private int $imdb;



    public function __construct($credentials)
    {
        $this->id = $credentials['id'];
        $this->title_en = $credentials['title_en'];
        $this->title_fr = $credentials['title_fr'];
        $this->description_en = $credentials['description_en'];
        $this->description_fr = $credentials['description_fr'];
        $this->img_link = $credentials['img_link'];
        $this->year = $credentials['year'];
        $this->duration= $credentials['duration'];
        $this->genre = $credentials['genre'];
        $this->writer = $credentials['writer'];
        $this->director = $credentials['director'];
        $this->cast = $credentials['cast'];
        $this->imdb = $credentials['imdb'];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitleFr(): string
    {
        return $this->title_fr;
    }

    /**
     * @return string
     */
    public function getDescriptionFr(): string
    {
        return $this->description_fr;
    }

    /**
     * @return string
     */
    public function getTitleEn(): string
    {
        return $this->title_en;
    }

    /**
     * @return string
     */
    public function getDescriptionEn(): string
    {
        return $this->description_en;
    }

    /**
     * @return string
     */
    public function getImgLink(): string
    {
        return $this->img_link;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @return string
     */
    public function getWriter(): string
    {
        return $this->writer;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->director;
    }

    /**
     * @return string
     */
    public function getCast(): string
    {
        return $this->cast;
    }

    /**
     * @return int
     */
    public function getImdb(): int
    {
        return $this->imdb;
    }





}
?>
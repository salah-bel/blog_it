<?php

class Article
{
    private $id;
    private $title;
    private $content;
    private $cover;
    private $author;
    private $category;
    private $published_at;
    private $reading_time;

    public function findAll($pdo)
    {
        $sql = "SELECT * FROM articles";

        $stmt = $pdo->prepare($sql);

        $stmt->execute();

        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findOneById($pdo, $id)
    {
        $sql = "SELECT * FROM articles WHERE id = :id";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([':id' => $id]);

        return  $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of cover
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set the value of cover
     *
     * @return  self
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of published_at
     */
    public function getPublished_at()
    {
        return $this->published_at;
    }

    /**
     * Set the value of published_at
     *
     * @return  self
     */
    public function setPublished_at($published_at)
    {
        $this->published_at = $published_at;

        return $this;
    }

    /**
     * Get the value of reading_time
     */
    public function getReading_time()
    {
        return $this->reading_time;
    }

    /**
     * Set the value of reading_time
     *
     * @return  self
     */
    public function setReading_time($reading_time)
    {
        $this->reading_time = $reading_time;

        return $this;
    }
}

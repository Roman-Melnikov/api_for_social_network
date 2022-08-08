<?php

namespace Melni\AdvancedCoursePhp\Blog;

class Post
{
    public function __construct(
        private UUID   $uuid,
        private User   $autor,
        private string $heading,
        private string $text
    )
    {
    }

    public function __toString(): string
    {
        return $this->getHeading() . PHP_EOL . $this->getText();
    }

    /**
     * @return UUID
     */
    public function getUuid(): UUID
    {
        return $this->uuid;
    }

    /**
     * @return \Melni\AdvancedCoursePhp\Blog\User
     */
    public function getAutor(): User
    {
        return $this->autor;
    }

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
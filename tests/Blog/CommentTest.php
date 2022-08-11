<?php

namespace Melni\AdvancedCoursePhp\UnitTests\Blog;

use Melni\AdvancedCoursePhp\Blog\Comment;
use Melni\AdvancedCoursePhp\Blog\Exceptions\InvalidUuidException;
use Melni\AdvancedCoursePhp\Blog\Post;
use Melni\AdvancedCoursePhp\Blog\User;
use Melni\AdvancedCoursePhp\Blog\UUID;
use Melni\AdvancedCoursePhp\Person\Name;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    /**
     * @throws InvalidUuidException
     */
    public function testItReturnsCommentAsString(): void
    {
        $user = new User(
            new UUID(uuid_create(UUID_TYPE_RANDOM)),
            new Name('first', 'last'),
            'username'
        );

        $post = new Post(
            new UUID(uuid_create(UUID_TYPE_RANDOM)),
            $user,
            'title',
            'text'
        );

        $comment = new Comment(
            new UUID(uuid_create(UUID_TYPE_RANDOM)),
            $user,
            $post,
            'txt'
        );

        $value = (string)$comment;
        $this->assertIsString($value);
    }
}
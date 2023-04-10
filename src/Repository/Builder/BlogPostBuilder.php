<?php

namespace App\Repository\Builder;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }

    public function setTitle(string $title): BlogPostBuilderInterface
    {
        $this->blogPost->title = $title;

        return $this;
    }

    public function setBody(string $body): BlogPostBuilderInterface
    {
        $this->blogPost->body = $body;

        return $this;
    }

    public function setTags(array $tags): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $tags;

        return $this;
    }

    public function setCategories(array $categories): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $categories;

        return $this;
    }

    public function getBlogPost(): BlogPost
    {
        $result = $this->blogPost;
        $this->create();

        return $result;
    }
}

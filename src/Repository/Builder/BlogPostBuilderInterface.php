<?php

namespace App\Repository\Builder;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $title): BlogPostBuilderInterface;

    public function setBody(string $body): BlogPostBuilderInterface;
    
    public function setTags(array $tags): BlogPostBuilderInterface;

    public function setCategories(array $categories): BlogPostBuilderInterface;

    public function getBlogPost(): BlogPost;
}

<?php

namespace App\Repository\Builder;

class BlogPostManager
{
    private $builder;

    public function setBuilder(BlogPostBuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    public function getScenarioEmptyPost()
    {
        return $this->builder->getBlogPost();
    }

    public function getScenarioPostIT()
    {
        return $this->builder
            ->setTitle('this is post about IT')
            ->setBody('interesting information')
            ->setCategories([
                'it', 'qa', 'php'
            ])
            ->setTags([
                'development', 'hiring'
            ])
            ->getBlogPost();
    }

    public function getScenarioPostCats()
    {
        return $this->builder
            ->setTitle('this is post about cats')
            ->setCategories([
                'cats', 'meow'
            ])
            ->getBlogPost();
    }
}

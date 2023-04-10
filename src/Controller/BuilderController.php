<?php

namespace App\Controller;

use App\Repository\Builder\BlogPostBuilder;
use App\Repository\Builder\BlogPostManager;

class BuilderController extends MainController
{
	private $key = 'builder';

	private $description = 'Строитель (Builder) — это порождающий паттерн проектирования, который позволяет создавать сложные объекты пошагово. Строитель даёт возможность использовать один и тот же код строительства для получения разных представлений объектов.';

	private $link = 'https://www.youtube.com/watch?v=tKF_dY8UHMg&list=PLoonZ8wII66hKbEvIVAZnp1h4CE-4Mtk4&index=16';

	public function index()
	{
		$item = [];

        $builder = new BlogPostBuilder();
        $item[] = $builder->setTitle('test title')->getBlogPost();

        $manager = new BlogPostManager();
        $manager->setBuilder($builder);
        $item[] = $manager->getScenarioEmptyPost();
        $item[] = $manager->getScenarioPostCats();
        $item[] = $manager->getScenarioPostIT();


		dd($item);


		return $this->render('item.html.twig', [
			'page_title' => self::PAGE_TITLE,
			'name' => self::getPatternName($this->key),
			'description' => $this->getDescription(),
			'link' => $this->link,
			'item' => $item
		]);
	}
}

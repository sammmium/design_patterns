<?php

namespace App\Controller;

use App\Entity\Form;
use App\Entity\Taxes;
use App\Repository\ProductsRepository;
use App\Repository\TaxesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Products;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class DefaultController extends AbstractController
{
	public function index(EntityManagerInterface $doctrine)
	{
		$productForm = new Form();

		$choices = [
			'Выберите продукт' => 0
		];

		$products = $doctrine->getRepository(Products::class)
			->findAll();

		if (!empty($products)) {
			foreach ($products as $product) {
				$choices[$product->getName()] = $product->getId();
			}
		}

		$form = $this->createFormBuilder($productForm)
			->setMethod('post')
			->setAction($this->generateUrl('product_show'))
			->add('name', ChoiceType::class, [
				'choices' => $choices,
				'label' => 'Наименование'
			])
			->add('tax', TextType::class, [
				'label' => 'TAX код'
			])
			->add('save', SubmitType::class, [
				'label' => 'Расчитать стоимость'
			])
			->getForm();

		return $this->render('index.html.twig', [
			'page_title' => 'Выбор продукта',
			'form' => $form->createView(),
		]);
	}

	public function show(Request $request, EntityManagerInterface $doctrine)
	{
		try {
			$form = $request->request->get('form');

			$prefix = substr($form['tax'], 0, 2);

			$taxValue = $doctrine->getRepository(Taxes::class)
				->findTaxValue($prefix);

			$product = $doctrine->getRepository(Products::class)
				->find($form['name']);
			if (empty($product)) {
				return $this->redirect('/');
			}

			$preparedCost = $this->getPreparedCost($product->getCost(), $taxValue) . ' USD';

			$data = [
				'page_title' => 'Результат',
				'name' => $product->getName(),
				'cost' => $preparedCost
			];

			return $this->render('report.html.twig', $data);
		} catch (\Exception $exception) {
			return $this->redirect('/');
		}
	}

	private function getPreparedCost(int $cost, int $taxValue): string
	{
		$result = ($cost + (($cost / 100) * $taxValue)) / 100;
		return number_format($result, 2, ',', '');
	}
}

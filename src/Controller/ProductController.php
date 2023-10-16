<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\ProductService;
use App\Request\CalculatePriceRequest;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/v1/product/calculate')]
    public function calculatePrice(CalculatePriceRequest $request, EntityManagerInterface $em, ProductService $service): Response
    {
        $request->validate();

        $data = $request->getRequest()->toArray();
        $product = $em->getRepository(Product::class)->find($data['product_id']);

        if (!$product) {
            return $this->json([
                'message' => '404'
            ], 404);
        }

        return $this->json([
            'price' => $service->getProductPrice($product, $em, $data['taxNumber'], $data['couponCode']),
        ]);
    }
}

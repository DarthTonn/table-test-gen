<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Product controller.
 *
 * @Route("/")
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     * @Route("/", name="_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('AppBundle:Product')->findAll();

        return $this->render('product/index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * Creates a new product entity.
     *
     * @Route("/new", name="_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm('AppBundle\Form\ProductType', $product);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $requestData = $request->request->all()['appbundle_product'];
            unset($requestData['_token']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $requestData['id'] = $product->getId();

            return new Response(json_encode($requestData), 200);
        }

        $view = $this->renderView('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));

        $response = new Response($view, 200);

        return $response;
    }

    /**
     * Finds and displays a product entity.
     *
     * @Route("/view", name="_view")
     * @Method({"GET", "POST"})
     */
    public function viewAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('AppBundle:Product')->getAllProducts();
        foreach ($products as $product) {
            $product['editable'] = false;
        }

        return new Response(json_encode($products), 200);
    }

    /**
     * Deletes a product entity.
     *
     * @Route("/delete-product/{id}", name="_delete_product")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        return new Response('Deleted!', 200);
    }
}

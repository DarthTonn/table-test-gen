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
//        if (!$form->isValid()) {
            // How to get all error message of each field ??
//            echo "<pre>";
//            foreach($form->getErrors() as $error) {
//                print_r($error->getMessage()) ;
//            }
//            print_r();
//        }
        if ($form->isValid()) {
            $requestData = $request->request->all()['appbundle_product'];
            unset($requestData['_token']);

//            dump($requestData);die;
//            $name = $requestData->get('name');
//            $category = $requestData->get('category');
//            $manufacturer = $requestData->get('manufacturer');
//            $price = $requestData->get('price');
//            $slug = $requestData->get('slug');
//
//            $product->setName($name);
//            $product->setCategory($category);
//            $product->setManufacturer($manufacturer);
//            $product->setPrice($price);
//            $product->setSlug($slug);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            $requestData['id'] = $product->getId();

            return new Response(json_encode($requestData), 200);
//            return $this->redirectToRoute('_show', array('id' => $product->getId()));
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
     * @Method("POST")
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
     * Displays a form to edit an existing product entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Product $product)
    {
        $editForm = $this->createForm('AppBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $result = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'category' => $product->getName(),
                'manufacturer' => $product->getName(),
            ];

            return new Response(json_encode($result), 200);
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     * @Route("/{id}", name="_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

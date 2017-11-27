<?php

namespace AppBundle\Controller;

use AppBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/create",name="create_product")
     */
    public function createAction()
    {
      $product = new Product();
      $product->setName('A Foo Bar');
      $product->setPrice('19.99');

      $dm = $this->get('doctrine_mongodb')->getManager();
      $dm->persist($product);
      $dm->flush();

      return new Response('Created product id '.$product->getId());
    }

    /**
     * @Route("/show/{id}",name="show_product")
     */
    public function showAction($id)
    {
      $product = $this->get('doctrine_mongodb')
        ->getRepository('AppBundle:Product')
        ->find($id);

      if(!$product){
        $product = $this->get('doctrine_mongodb')
          ->getRepository('AppBundle:Product')
          ->findOneBy([ 'price' => 19.99 ]);
      }

      if(!$product){
        throw $this->createNotFoundException('No product found for id '.$id);
      }

      $product = $this->get('doctrine_mongodb')->getRepository('AppBundle:Product')->findAll();

      return new Response('Found product '.dump($product));
    }
}

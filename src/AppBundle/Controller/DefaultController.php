<?php

namespace AppBundle\Controller;

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
        $product = $this->getDoctrine()
        ->getRepository('AppBundle:BlogPost')
        ->findAll();
        
        $productCategory = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->findAll();

        if (!$product) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        }
        // replace this example code with whatever you need
        return $this->render('PagePrincipale/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'BlogPost' => $product,
            'Categorie' => $productCategory,
        ]);
    }

    public function ArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        // On récupère l'annonce $id
        $product = $em
          ->getRepository('AppBundle:BlogPost')
          ->find($id);
        ;

        $productCategory = $this->getDoctrine()
        ->getRepository('AppBundle:Category')
        ->findAll();

         if (!$product) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$id
            );
        }

        return $this->render('PagePrincipale/article.html.twig', array(
          'BlogPost'           => $product,
          'Categorie' => $productCategory,
        ));
    }
}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductCategoryController extends Controller
{
    /**
     * @Route("/treecatalog", name="tree_catalog")
     */
    public function categoryListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AppBundle:ProductCategory')->getCategoriesByParent();

        return $this->render(
            'admin/category/list2.html.twig', array(
                'categories' => $categories,
            )
        );
    }
}

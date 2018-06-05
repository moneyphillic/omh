<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admincategories")
 */
class CategoriesController extends Controller
{
    /**
     * @Route("/index", name="categories_index")
     */
    public function indexAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository(Categories::class)->findAll();
        return $this->render('categories/index.html.twig', array(
            'categories' => $categories ? $categories : null,
        ));
    }

    /**
     * @Route("/edit/{id}", name="category_edit")
     * @Method({"POST", "GET"})
     */
    public function editAction(Request $request, $id)
    {
        $category = $this->getDoctrine()->getRepository(Categories::class)->find($id);
        $em = $this->getDoctrine()->getManager();

        if (isset($_POST['submit'])) {
            $category->setName($_POST['categoryname']);
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('categories_index');
        }

        return $this->render('categories/edit.html.twig', array(
            'category' => $category ? $category : null,
        ));
    }

    /**
     * @Route("/new", name="category_new")
     */
    public function newAction(Request $request)
    {
        return $this->render('categories/new.html.twig');
    }

    /**
     * @Route("/add", name="category_add")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $category = new Categories();

        $category->setName($_POST['categoryname']);
        $em->persist($category);
        $em->flush();

        return $this->redirectToRoute('categories_index');
    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use AppBundle\Entity\Project;
use AppBundle\Form\ProjectType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/adminproject")
 */
class ProjectController extends Controller
{
    /**
     * @Route("/index", name="project_index")
     */
    public function indexAction(Request $request)
    {
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();

        return $this->render('project/index.html.twig', array(
            'projects' => $projects,
        ));
    }

    /**
     * @Route("/new", name="project_new")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $project = new Project();
        $helper = $this->get('helper');
        $form = $this->createForm('AppBundle\Form\ProjectType', $project);
        $form->handleRequest($request);
        $session = $this->get('session');

        if ($form->isSubmitted()) {
            $session->set('projectvalues', array(
                'name' => $project->getName(),
                'description' => $project->getDescription(),
                'category' => $project->getCategory(),
                'client' => $project->getYear(),
                'types' => $project->getTypes(),
                'year' => $project->getYear(),
                'agency' => $project->getAgency(),
            ));
        }

        if($form->isSubmitted() && $form->isValid()) {
            $backgroundimage = $helper->uploadSingleImage($project->getBackgroundImg());
            $portfolioimage = $helper->uploadSingleImage($project->getPortfolioImg());
            $thumbnailimage = $helper->uploadSingleImage($project->getThumbnailImg());

            $project->setBackgroundImg($backgroundimage);
            $project->setPortfolioImg($portfolioimage);
            $project->setThumbnailImg($thumbnailimage);

            $em->persist($project);
            $em->flush();
            return $this->redirectToRoute('project_index');
        }

        $categories = $this->getDoctrine()->getRepository(Categories::class)->findAll();
        return $this->render('project/new.html.twig', array(
            'categories' => $categories !== null ? $categories : null,
            'form' => $form->createView(),
            'values' => !empty($session->get('projectvalues')) ? $session->get('projectvalues') : null,
        ));
    }

    /**
     * @Route("/edit/{id}", name="project_edit")
     * @Method({"POST", "GET"})
     */
    public function editAction(Request $request, $id)
    {
        $project = $this->getDoctrine()->getRepository(Project::class)->find($id);
        $categories = $this->getDoctrine()->getRepository(Categories::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $helper = $this->get('helper');

        $backgroundimage = $project->getBackgroundImg();
        $portfolioimage = $project->getPortfolioImg();
        $thumbnailimage = $project->getThumbnailImg();

        $form = $this->createForm('AppBundle\Form\ProjectType', $project);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if ($project->getBackgroundImg() != null && file_exists('upload/' . $backgroundimage)) {
                unlink('upload/' . $backgroundimage);
            }
            if ($project->getPortfolioImg() != null && file_exists('upload/' . $portfolioimage)) {
                unlink('upload/' . $portfolioimage);
            }
            if ($project->getThumbnailImg() != null && file_exists('upload/' . $thumbnailimage)) {
                unlink('upload/' . $thumbnailimage);
            }
            if ($project->getBackgroundImg() != null) {
                $backgroundimage = $helper->uploadSingleImage($project->getBackgroundImg());
            }
            if ($project->getPortfolioImg() != null) {
                $portfolioimage = $helper->uploadSingleImage($project->getPortfolioImg());
            }
            if ($project->getThumbnailImg() != null) {
                $thumbnailimage = $helper->uploadSingleImage($project->getThumbnailImg());
            }
            $project->setBackgroundImg($backgroundimage);
            $project->setPortfolioImg($portfolioimage);
            $project->setThumbnailImg($thumbnailimage);

            $em->persist($project);
            $em->flush();
            return $this->redirectToRoute('project_index');
        }

        return $this->render('project/edit.html.twig', array(
            'project' => $project ? $project : null,
            'errors' => isset($errors) ? $errors : null,
            'categories' => $categories !== null ? $categories : null,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/delete/{id}", name="project_delete")
     * @Method({"POST", "GET"})
     */
    public function deleteAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $project = $this->getDoctrine()->getRepository(Project::class)->find($id);
        if ($project->getBackgroundImg() != null) {
            unlink('upload/' . $project->getBackgroundImg());
        }
        if ($project->getPortfolioImg() != null) {
            unlink('upload/' . $project->getBackgroundImg());
        }
        if ($project->getThumbnailImg() != null) {
            unlink('upload/' . $project->getThumbnailImg());
        }
        $em->remove($project);
        $em->flush();
        return $this->redirectToRoute('project_index');
    }
}

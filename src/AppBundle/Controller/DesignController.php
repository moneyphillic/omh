<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Design;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admindesign")
 */
class DesignController extends Controller
{
    /**
     * @Route("/index", name="design_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $design = $this->getDoctrine()->getRepository(Design::class)->find(1);
        $helper = $this->get('helper');
        if ($design == null) {
            $design = new Design();
        }

        $logo = $design->getLogo();
        $relicon = $design->getRelicon();

        $form = $this->createForm('AppBundle\Form\DesignType', $design);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if ($design->getLogo() != null && $logo != '' && file_exists('upload/' . $logo)) {
                unlink('upload/' . $logo);
            }
            if ($design->getRelicon() != null && $relicon != '' && file_exists('upload/' . $relicon)) {
                unlink('upload/' . $relicon);
            }
            if ($design->getLogo() != null) {
                $logo = $helper->uploadSingleImage($design->getLogo());
            }
            if ($design->getRelicon() != null) {
                $relicon = $helper->uploadSingleImage($design->getRelicon());
            }
            $design->setLogo($logo);
            $design->setRelicon($relicon);

            $em->persist($design);
            $em->flush();
        }

        return $this->render('design/index.html.twig', array(
            'design' => $design ? $design : null,
            'form' => $form->createView(),
        ));
    }
}

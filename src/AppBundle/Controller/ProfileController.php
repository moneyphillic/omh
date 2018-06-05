<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/adminprofile")
 */
class ProfileController extends Controller
{
    /**
     * @Route("/index", name="profile_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profile = $this->getDoctrine()->getRepository(Profile::class)->find(1);
        $helper = $this->get('helper');
        if ($profile == null) {
            $profile = new Profile();
        }

        $backgroundimage = $profile->getBackgroundImg();

        $form = $this->createForm('AppBundle\Form\ProfileType', $profile);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            if ($profile->getBackgroundImg() != null && $backgroundimage != '' && file_exists('upload/' . $backgroundimage)) {
                unlink('upload/' . $backgroundimage);
            }
            if ($profile->getBackgroundImg() != null) {
                $backgroundimage = $helper->uploadSingleImage($profile->getBackgroundImg());
            }
            $profile->setBackgroundImg($backgroundimage);
            $profile->setSocialChannels('');

            $em->persist($profile);
            $em->flush();
        }

        return $this->render('profile/index.html.twig', array(
            'profile' => $profile ? $profile : null,
            'form' => $form->createView(),
        ));
    }
}

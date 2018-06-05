<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use AppBundle\Entity\Profile;
use AppBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categories::class)->findAll();
        $projects = $em->getRepository(Project::class)->findAll();
        $profile = $em->getRepository(Profile::class)->find(1);

        return $this->render('template/index.html.twig', array(
            'categories' => $categories ? $categories : null,
            'projects' => $projects ? $projects : null,
            'profile' => $profile ? $profile : null,
        ));
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction(Request $request)
    {
        $categories = $this->getDoctrine()->getRepository(Categories::class)->findAll();
        $projects = $this->getDoctrine()->getRepository(Project::class)->findAll();

        if ($request->query->get('type')) {
            $type = $request->query->get('type');
        }

        return $this->render('template/projects.html.twig', array(
            'categories' => $categories,
            'projects' => $projects,
            'type' => isset($type) ? $type : null,
        ));
    }

    /**
     * @Route("/projects/{id}", name="singleproject")
     */
    public function singleProjectAction(Request $request, $id)
    {
        $project = $this->getDoctrine()->getRepository(Project::class)->find($id);
        $allProjects = $this->getDoctrine()->getRepository(Project::class)->findAll();
        for ($i = 0; $i < count($allProjects); $i++) {
            if ($allProjects[$i] == $project) {
                if ($i == 0) {
                    $projectBefore = end($allProjects);
                    $projectAfter = $allProjects[1];
                } else if ($i == (count($allProjects) - 1)) {
                    $projectBefore = $allProjects[count($allProjects) - 2];
                    $projectAfter = $allProjects[0];
                } else {
                    $projectBefore = $allProjects[$i - 1];
                    $projectAfter = $allProjects[$i + 1];
                }
            }
        }

        $types = $project->getTypes();
        $types = explode(',', $types);
        $nTypes = [];
        foreach ($types as $type) {
            array_push($nTypes, ltrim($type, ' '));
        }
        return $this->render('template/projectsingle.html.twig', array(
            'project' => $project,
            'ntypes' => $nTypes,
            'projectbefore' => $projectBefore,
            'projectafter' => $projectAfter,
        ));
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {
        $profile = $this->getDoctrine()->getRepository(Profile::class)->find(1);

        $hobbies = $profile->getHobbies();
        $hobbies = explode(',', $hobbies);
        $nHobbies = [];
        foreach ($hobbies as $hobbie) {
            array_push($nHobbies, ltrim($hobbie, ' '));
        }
        $social = $profile->getSocialChannels();
        $social = explode(',', $social);
        $nSocial = [];
        foreach ($social as $soc) {
            array_push($nSocial, ltrim($soc, ' '));
        }
        $clients = $profile->getClients();
        $clients = explode(',', $clients);
        $nClients = [];
        foreach ($clients as $cl) {
            array_push($nClients, ltrim($cl, ' '));
        }
        $studios = $profile->getStudios();
        $studios = explode(',', $studios);
        $nStudios = [];
        foreach ($studios as $st) {
            array_push($nStudios, ltrim($st, ' '));
        }
        $tools = $profile->getTools();
        $tools = explode(',', $tools);
        $nTools = [];
        foreach ($tools as $tls) {
            array_push($nTools, ltrim($tls, ' '));
        }

        return $this->render('template/profile.html.twig', array(
            'profile' => $profile,
            'hobbies' => $nHobbies,
            'social' => $nSocial,
            'clients' => $nClients,
            'studios' => $nStudios,
            'tools' => $nTools,
        ));
    }

    /**
     * @Route("/contact-me", name="contactme")
     */
    public function contactMeAction(Request $request)
    {
        $profile = $this->getDoctrine()->getRepository(Profile::class)->find(1);

        return $this->render('template/contactme.html.twig', array(
            'profile' => $profile,
        ));
    }

    /**
     * @Route("/send-contact-mail", name="send_contact_mail")
     */
    public function sendContactMail(Request $request)
    {
        $profile = $this->getDoctrine()->getRepository(Profile::class)->find(1);

        $helper = $this->get('helper');
        $data = array();
        $data['mail'] = $_POST['email'];
        $data['name'] = $_POST['name'];
        $data['message'] = $_POST['message'];
        $data['mailto'] = $profile->getMail();

        $helper->sendMail($data);

        return $this->redirectToRoute('homepage');
    }
}

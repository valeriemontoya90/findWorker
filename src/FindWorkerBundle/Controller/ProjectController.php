<?php

namespace FindWorkerBundle\Controller;

use FindWorkerBundle\Entity\Project;
use FindWorkerBundle\Form\ProjectType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

        $project = new Project();

    	$form = $this->createForm(new ProjectType(), $project,
    		array(
	    		'attr' => array(
	    			'method'=> 'post',
	    			'novalidate' => "novalidate"
	    			//action de formulaire pointe vers cette même action de controller
			)
	    ));


		// gère la requête
	    $form->handleRequest($request);

	    // si mon formulaire est valide
            if($form->isValid())
            {
                //mettre en cache
	    	$em->persist($project);

	    	//enregistrer en bdd
	    	$em->flush();
	    	return $this->redirectToRoute('find_worker_new');
	    }
        return $this->render('FindWorkerBundle:Project:new.html.twig',
        ['form'=>$form->createView()]
        );
	}

    public function listAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listProject = $this->getDoctrine()->getRepository('FindWorkerBundle:Project')->findAll();

        return $this->render('FindWorkerBundle:Project:list.html.twig', array(
            'projects'=> $listProject
        ));
    }
}

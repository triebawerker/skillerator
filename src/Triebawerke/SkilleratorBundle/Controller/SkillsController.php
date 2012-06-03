<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Triebawerke\SkilleratorBundle\Entity\Skill;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SkillsController extends Controller
{
 
    private $skill;
    
    public function __construct()
    {
        $this->skill = new Skill();
    }
    
    /**
     * @Route("/", name="_skills")
     * @Template()
     */
    public function indexAction()
    {
        $skills = $this->getDoctrine()
                       ->getRepository('TriebawerkeSkilleratorBundle:Skill')
                       ->findAll();
        return array('skills' => $skills);
    }

    /**
     * @Route("/create/{id}", name="_skills_create")
     * @Template()
     */
    public function createAction($id)
    { 
      $skills = $this->getDoctrine()
                     ->getRepository('TriebawerkeSkilleratorBundle:Skill')
                     ->find(array($id));
      return array('skill_id' => $skills->getId(),
                   'skill_name' => $skills->getName()
              );
    }
    
    /**
     * @Route("/new", name="_skills_new")
     * @Template()
     */
    public function newAction(Request $request)
      {

        $form = $this->createFormBuilder($this->skill)
                ->add('name', 'text')
                ->add('description', 'text')
                ->getForm();
        
        if ($request->getMethod() == 'POST') {
        $form->bindRequest($request);
          if ($form->isValid()) {

          $em = $this->getDoctrine()->getEntityManager();
          $em->persist($this->skill);
          $em->flush();
          
          $id = $this->skill->getId();
          
          return $this->redirect($this->generateUrl('_skills_create', array('id' => $id)));
          }
        }
        return $this->render('TriebawerkeSkilleratorBundle:Skills:new.html.twig', array(
          'form' => $form->createView(),
          ));

      }

}

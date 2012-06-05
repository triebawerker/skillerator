<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Triebawerke\SkilleratorBundle\Entity\Level;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LevelController extends Controller
{
    
    /**
     * @Route("level/", name="_level")
     * @Template()
     */
    public function indexAction()
    {
        $level = $this->getDoctrine()
                       ->getRepository('TriebawerkeSkilleratorBundle:Level')
                       ->findAll();
        return array('levels' => $level);
    }
    
    /**
     * @Route("level/update{id}", name="_level_update")
     * @Template() 
     */
    public function updateAction($id)
    {        
      $em = $this->getDoctrine()->getEntityManager();
      $level = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find($id);
      $form = $this->createFormBuilder($level)
              ->add('name', 'text')
              ->add('description', 'text')
              ->getForm();
//      return $this->redirect($this->generateUrl('_level_create', array('id' => $id)));
            // render form 
//      var_dump($form);
//      die();
      return $this->render('TriebawerkeSkilleratorBundle:Level:update.html.twig', array(
        'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/create/{id}", name="_level_create")
     * @Template()
     */
    public function createAction($id)
    { 
      $level = $this->getDoctrine()
                     ->getRepository('TriebawerkeSkilleratorBundle:Level')
                     ->find(array($id));
      
      return array('level_id' => $level->getId(),
                   'level_name' => $level->getName(),
                   'level_description' => $level->getDescription()
                  );
    }
}

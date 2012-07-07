<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
      /**
     * @Route("/", name="_home")
     * @Template()
     */  
  public function indexAction()
    {
        return $this->render('TriebawerkeSkilleratorBundle:Home:index.html.twig');
    }
    
    /**
     * @Route("/skillerator", name="_home_skillerator")
     * @Template()
     */
    public function skilleratorAction()
    {
        return array();
    }
    
    /**
     * @Route("/contact", name="_home_contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }
    
     /**
     * @Route("/define", name="_home_define")
     * @Template()
     */
    public function defineAction()
    {
        return array();
    }
}

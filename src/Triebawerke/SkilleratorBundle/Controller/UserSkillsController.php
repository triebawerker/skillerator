<?php
/**
 * Description of UserSkillsController
 *
 * @author micha
 */

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Triebawerke\SkilleratorBundle\Entity\Skill;
use Triebawerke\SkilleratorBundle\Entity\User;
use Triebawerke\SkilleratorBundle\Entity\UserSkills;
use Triebawerke\SkilleratorBundle\Form\MyskillsType;

// these import the "@Route" and "@Template" and "@Method" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserSkillsController extends Controller {
   /**
    * @Route("/", name="userskills")
    * @Template()
    */
    public function indexAction()
    {
      $userSkills = $this->getDoctrine()
                      ->getRepository('TriebawerkeSkilleratorBundle:User')
                      ->findAll();

        var_dump($userSkills);
        
      return array('entities' => $userSkills);
    }
    
        /**
     * @Route("/create", name="userskills_create")
     * @Template()
     */
    public function createAction()
    { 
        $skill  = new Skill();
        $request = $this->getRequest();
        $form    = $this->createForm(new MyskillsType(), $skill);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($skill);
            $em->flush();

            return $this->redirect($this->generateUrl('_skills_show', array('id' => $skill->getId())));
            
        }

        return array(
            'entity' => $skill,
            'form'   => $form->createView()
        );
    }
    
    /**
     * Displays a form to create a new Certificate entity.
     *
     * @Route("/new", name="userskills_new")
     * @Template()
     */
    public function newAction()
    {
        $userSkills = new UserSkills();
        $em = $this->getDoctrine()->getEntityManager();
        $skills = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')
                     ->findAll();
        $formValues = array($userSkills, $skills);
        $form   = $this->createForm(new MyskillsType(), $userSkills);        
        
        return array(
            'skills'     => $skills,
            'form'       => $form->createView()
        );
    }
    
    
    /**
     *@Route("/test", name="userskills_test")
     *@Template() 
     */
    public function testAction()
    {
      $em = $this->getDoctrine()->getEntityManager();
      $user = $em->getRepository('TriebawerkeSkilleratorBundle:User')->find(1);
      $skill = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')->find(2);
      $user->addSkill($skill);
      
      $em->persist($user);
      $em->persist($skill);
      $em->flush();
      
      var_dump($user);
      return array('entities' => $user);
    }
}

?>

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
use Triebawerke\SkilleratorBundle\Form\CertificateType;

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
        $form    = $this->createForm(new CertificateType(), $skill);
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
}

?>

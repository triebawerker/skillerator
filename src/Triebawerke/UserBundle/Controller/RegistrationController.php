<?php

namespace Triebawerke\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Triebawerke\UserBundle\Form\RegistrationType;
use Triebawerke\UserBundle\Entity\User;
use Triebawerke\UserBundle\Entity\Groups;

/**
 * Registration controller.
 *
 * @Route("/registration")
 */
class RegistrationController extends Controller
{
    /**
     * Start registration.
     *
     * @Route("/register", name="registration_register")
     * @Method("post")
     * @Template("TriebawerkeUserBundle:Registration:register.html.twig")
     */  
    public function registerAction()
    {
      $entity = new User();  
      $form = $this->createForm(new RegistrationType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }
    
    /**
     * Create new registered user.
     *
     * @Route("/create", name="registration_create")
     * @Method("post")
     * @Template("TriebawerkeUserBundle:Registration:register.html.twig")
     */      
    public function createAction()
    {
      $em = $this->getDoctrine()->getEntityManager();

      $entity = new User();
      $request = $this->getRequest();
      $form = $this->createForm(new RegistrationType(), $entity);
      $form->bindRequest($request);

      // set role

      $role = $em->getRepository('TriebawerkeUserBundle:Groups')->find(1);
      $entity->addGroups($role);

      if ($form->isValid()) {

        
        // set password
        $factory = $this->get('security.encoder_factory');

        $encoder = $factory->getEncoder($entity);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);

        // persist new user
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('_home'));
    }

    return $this->render('TriebawerkeUserBundle:Registration:register.html.twig', array('form' => $form->createView()));
}
}

?>

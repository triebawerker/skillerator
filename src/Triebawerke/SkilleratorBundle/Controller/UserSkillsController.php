<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Triebawerke\SkilleratorBundle\Entity\UserSkills;
use Triebawerke\SkilleratorBundle\Form\MyskillsType;
use Triebawerke\SkilleratorBundle\Entity\Goal;

/**
 * UserSkills controller.
 *
 * @Route("/userskills")
 */
class UserSkillsController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/userskills", name="userskills")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $userSkills = $this->getDoctrine()
                ->getRepository('TriebawerkeSkilleratorBundle:UserSkills')
                ->loadSkillsByUserId($user->getId());
        
//        var_dump($userSkills);
//        die();
        return array('entities' => $userSkills);
    }

    /**
     * Finds and displays a User entity.
     *
     * @Route("/{id}/show", name="userskills_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:UserSkills')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'skill'       => $entity->getSkills(),
            'delete_form' => $deleteForm->createView(),        );
    }
    

    /**
     * Displays a form to create a new User entity.
     *
     * @Route("/new", name="userskills_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new UserSkills();
        
        $form   = $this->createForm(new MyskillsType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new User entity.
     *
     * @Route("/create", name="user_create")
     * @Method("post")
     * @Template("TriebawerkeUserBundle:User:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new UserSkills();
        

        
        $request = $this->getRequest();
        $form    = $this->createForm(new MyskillsType(), $entity);
        
        $form->bindRequest($request);
        
        $user = $this->get('security.context')->getToken()->getUser(); 
        $entity->setUsers($user);
        $goal = $this->setDefaultGoal();
        $entity->setGoals($goal);  

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();           
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userskills_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:UserSkills')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(new MyskillsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing User entity.
     *
     * @Route("/{id}/update", name="user_update")
     * @Method("post")
     * @Template("TriebawerkeUserBundle:User:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:UserSkills')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm   = $this->createForm(new MyskillsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userskills_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a User entity.
     *
     * @Route("/{id}/delete", name="user_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeSkilleratorBundle:UserSkills')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userskills'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    private function setDefaultGoal()
    {
      // get default level and certificate
      $em = $this->getDoctrine()->getEntityManager();
      $level = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find(8);
      $certificate = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->find(4);
     
      // create new goal with default values
      $goal = new Goal();
        $goal->setLevels($level);
        $goal->setCertificates($certificate);
        $goal->setComment("Default goal");
        
        return $goal;
    }
}
?>

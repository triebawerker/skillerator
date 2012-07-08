<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Triebawerke\SkilleratorBundle\Entity\Goal;
use Triebawerke\SkilleratorBundle\Form\GoalType;

/**
 * Goal controller.
 *
 * @Route("/goal")
 */
class GoalController extends Controller
{
    /**
     * Lists all Goal entities.
     *
     * @Route("/", name="goal")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $entities = $this->getDoctrine()
                ->getRepository('TriebawerkeSkilleratorBundle:Goal')
                ->loadGoalsByUserId($user->getId());
        
        return array('entities' => $entities); 
    }

    /**
     * Finds and displays a Goal entity.
     *
     * @Route("/{id}/show", name="goal_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Goal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Goal entity.
     *
     * @Route("/{userSkillId}/new", name="goal_new")
     * @Template()
     */
    public function newAction($userSkillId)
    {
      $goal = new Goal();
      $goal->setLevelId(8);
      $goal->setCertificateId(4);
      $goal->setComment("Default goal for new user skill");
      
      // get userSkill
      $em = $this->getDoctrine()->getEntityManager();
      $userSkill = $em->getRepository('TriebawerkeSkilleratorBundle:UserSkills')->find($userSkillId);
      $userSkill->setGoals($goal);
      $em->persist($userSkill);
      $em->persist($goal);
      $em->flush();     
      
      return $this->redirect($this->generateUrl('goal_edit', array('id' => $goal->getId())));
    }

    /**
     * Creates a new Goal entity.
     *
     * @Route("/create", name="goal_create")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Goal:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Goal();
        $request = $this->getRequest();
        $form    = $this->createForm(new GoalType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('goal_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Goal entity.
     *
     * @Route("/{id}/edit", name="goal_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Goal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goal entity.');
        }

        $editForm = $this->createForm(new GoalType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Goal entity.
     *
     * @Route("/{id}/update", name="goal_update")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Goal:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Goal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goal entity.');
        }

        $editForm   = $this->createForm(new GoalType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('goal_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Goal entity.
     *
     * @Route("/{id}/delete", name="goal_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Goal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Goal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('goal'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

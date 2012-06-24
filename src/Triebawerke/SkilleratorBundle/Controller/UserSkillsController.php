<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Triebawerke\SkilleratorBundle\Entity\UserSkills;
use Triebawerke\SkilleratorBundle\Form\MyskillsType;

/**
 * User controller.
 *
 * @Route("/user")
 */
class UserSkillsController extends Controller
{
    /**
     * Lists all User entities.
     *
     * @Route("/", name="user")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $userSkills = $this->getDoctrine()
          ->getRepository('TriebawerkeSkilleratorBundle:UserSkills')
          ->findAll();
        
        $userSkills = $this->getDoctrine()
                ->getRepository('TriebawerkeSkilleratorBundle:UserSkills')
                ->loadSkillsByUserId($user->getId());
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
var_dump($entity->getSkills()->getName());
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
     * @Template("TriebawerkeSkilleratorBundle:User:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new UserSkills();
        
//        $entity->setSkillId(1);
        
        $request = $this->getRequest();
        $form    = $this->createForm(new MyskillsType(), $entity);

        $form->bindRequest($request);
        $entity->setUserId(1);
//var_dump($entity);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            var_dump($entity);
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
     * @Template("TriebawerkeSkilleratorBundle:User:edit.html.twig")
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

        return $this->redirect($this->generateUrl('user'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}


?>

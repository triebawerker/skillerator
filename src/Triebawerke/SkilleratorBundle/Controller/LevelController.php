<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Triebawerke\SkilleratorBundle\Entity\Level;
use Triebawerke\SkilleratorBundle\Form\CertificateType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class LevelController extends Controller
{
    
    /**
     * @Route("level/", name="_level")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->findAll();

        return array('entities' => $entities);
    }
    
    /**
     * @Route("/new", name="_level_new")
     * @Template()
     */
    public function newAction()
    {    
      $level = new Level();
      
        $form   = $this->createForm(new CertificateType(), $level);
        
        return array(
            'entity' => $level,
            'form'   => $form->createView()
        );
      }
    
    /**
     * Edits an existing Skill entity.
     *
     * @Route("/{id}/update", name="level_update")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Level:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $level = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find($id);

        if (!$level) {
            throw $this->createNotFoundException('Unable to find Level entity.');
        }

        $editForm   = $this->createForm(new CertificateType(), $level);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($level);
            $em->flush();

            return $this->redirect($this->generateUrl('_level_edit', array('id' => $id)));
        }
        return array(
            'entity'      => $level,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/create", name="_level_create")
     * @Template()
     */
    public function createAction()
    { 
        $level  = new Level();
        $request = $this->getRequest();
        $form    = $this->createForm(new CertificateType(), $level);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($level);
            $em->flush();

            return $this->redirect($this->generateUrl('_level_show', array('id' => $level->getId())));            
        }

        return array(
            'entity' => $level,
            'form'   => $form->createView()
        );
    }
    
    /**
     * Finds and displays a Certificate entity.
     *
     * @Route("/{id}/show", name="_level_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $level = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find($id);

        if (!$level) {
            throw $this->createNotFoundException('Unable to find level entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $level,
            'delete_form' => $deleteForm->createView(),        );
    }
    
      /**
     * Displays a form to edit an existing skill entity.
     *
     * @Route("/{id}/edit", name="_level_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $level = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find($id);

        if (!$level) {
            throw $this->createNotFoundException('Unable to find Level entity.');
        }

        $editForm = $this->createForm(new CertificateType(), $level);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $level,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Deletes a level entity.
     *
     * @Route("/{id}/delete", name="level_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Level')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Level entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('_level'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

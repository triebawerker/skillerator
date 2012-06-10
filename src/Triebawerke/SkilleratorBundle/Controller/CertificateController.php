<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Triebawerke\SkilleratorBundle\Entity\Certificate;
use Triebawerke\SkilleratorBundle\Form\CertificateType;

/**
 * Certificate controller.
 *
 * @Route("/certificate")
 */
class CertificateController extends Controller
{
    /**
     * Lists all Certificate entities.
     *
     * @Route("/", name="certificate")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Certificate entity.
     *
     * @Route("/{id}/show", name="certificate_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificate entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Certificate entity.
     *
     * @Route("/new", name="certificate_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Certificate();
        $form   = $this->createForm(new CertificateType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Certificate entity.
     *
     * @Route("/create", name="certificate_create")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Certificate:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Certificate();
        $request = $this->getRequest();
        $form    = $this->createForm(new CertificateType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('certificate_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Certificate entity.
     *
     * @Route("/{id}/edit", name="certificate_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificate entity.');
        }

        $editForm = $this->createForm(new CertificateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Certificate entity.
     *
     * @Route("/{id}/update", name="certificate_update")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Certificate:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Certificate entity.');
        }

        $editForm   = $this->createForm(new CertificateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('certificate_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Certificate entity.
     *
     * @Route("/{id}/delete", name="certificate_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Certificate')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Certificate entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('certificate'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

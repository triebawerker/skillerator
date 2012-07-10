<?php

namespace Triebawerke\SkilleratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Triebawerke\SkilleratorBundle\Entity\Skill;
use Triebawerke\SkilleratorBundle\Form\CertificateType;

// these import the "@Route" and "@Template" and "@Method" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class SkillsController extends Controller
{
   
    /**
     * @Route("/", name="_skills")
     * @Template()
     */
    public function indexAction()
    {
        $skills = $this->getDoctrine()
                       ->getRepository('TriebawerkeSkilleratorBundle:Skill')
                       ->findAll();
        return array('entities' => $skills);
    }
    
    /**
     * Finds and displays a Certificate entity.
     *
     * @Route("/{id}/show", name="_skills_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $skill = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')->find($id);

        if (!$skill) {
            throw $this->createNotFoundException('Unable to find skill entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $skill,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * @Route("/create", name="_skills_create")
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
    
    /**
     * @Route("/new", name="_skills_new")
     * @Template()
     */
    public function newAction(Request $request)
    {
        $skill = new Skill();
      
        $form   = $this->createForm(new CertificateType(), $skill);
        
        return array(
            'entity' => $skill,
            'form'   => $form->createView()
        );
      }
      
    /**
     * Displays a form to edit an existing skill entity.
     *
     * @Route("/{id}/edit", name="_skill_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $skill = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')->find($id);

        if (!$skill) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $editForm = $this->createForm(new CertificateType(), $skill);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $skill,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Edits an existing Skill entity.
     *
     * @Route("/{id}/update", name="_skills_update")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Skill:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $skill = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')->find($id);

        if (!$skill) {
            throw $this->createNotFoundException('Unable to find Skill entity.');
        }

        $editForm   = $this->createForm(new CertificateType(), $skill);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($skill);
            $em->flush();

            return $this->redirect($this->generateUrl('_skills_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $skill,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Certificate entity.
     *
     * @Route("/{id}/delete", name="_skills_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeSkilleratorBundle:Skill')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find skill entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('_skills'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

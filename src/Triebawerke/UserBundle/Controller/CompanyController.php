<?php

namespace Triebawerke\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Triebawerke\UserBundle\Entity\Company;
use Triebawerke\UserBundle\Form\CompanyType;

/**
 * Company controller.
 *
 * @Route("/company")
 */
class CompanyController extends Controller
{
    /**
     * Lists all Company entities.
     *
     * @Route("/", name="company")
     * @Template()
     */
    public function indexAction()
    {
      
          $user = $this->get('security.context')->getToken()->getUser();
      
          $em = $this->getDoctrine()->getEntityManager();
          $entities = $em->getRepository('TriebawerkeUserBundle:User')->find($user->getId());

          return array('entities' => $entities);
    }

    /**
     * Finds and displays a Company entity.
     *
     * @Route("/{id}/show", name="company_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeUserBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Company entity.
     *
     * @Route("/new", name="company_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Company();
        $form   = $this->createForm(new CompanyType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Company entity.
     *
     * @Route("/create", name="company_create")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Company:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Company();
        $request = $this->getRequest();
        $form    = $this->createForm(new CompanyType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('company_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Company entity.
     *
     * @Route("/{id}/edit", name="company_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeUserBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $editForm = $this->createForm(new CompanyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Company entity.
     *
     * @Route("/{id}/update", name="company_update")
     * @Method("post")
     * @Template("TriebawerkeSkilleratorBundle:Company:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('TriebawerkeUserBundle:Company')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Company entity.');
        }

        $editForm   = $this->createForm(new CompanyType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('company_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Company entity.
     *
     * @Route("/{id}/delete", name="company_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('TriebawerkeUserBundle:Company')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Company entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('company'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
        
    /**
     * Show skills for selected company
     *
     * @Route("/companyskills/{id}", name="company_companyskills")
     * @Method("post")
     */
    public function companyskillsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
       
        $company = $em->getRepository('TriebawerkeUserBundle:Company')->find($id);
        $users = $company->getUsers();
            
        // get userIds
        $userIds = array();
        foreach($users as $user)
        {
          $userIds[] = $user->getId();
        }
        
        $userSkills = $this->getDoctrine()
                          ->getRepository('TriebawerkeSkilleratorBundle:UserSkills')
                          ->loadSkillsByUserIds($userIds); 
        
        return $this->render('TriebawerkeUserBundle:Company:userskills.html.twig',
                              array('entities' => $userSkills,
                                    'company'  => $company,                                  
                                   ));
      
    }
        
    /**
     * Show skills for selected team
     *
     * @Route("/{id}/teamskills", name="company_teamskills")
     * @Method("post")
     */
    public function teamskillsAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        
        $team = $em->getRepository('TriebawerkeUserBundle:Team')->find($id);
        $users = $team->getUsers();
            
        // get userIds
        $userIds = array();
        foreach($users as $user)
        {
          $userIds[] = $user->getId();
        }

        $userSkills = $this->getDoctrine()
                          ->getRepository('TriebawerkeSkilleratorBundle:UserSkills')
                          ->loadSkillsByUserIds($userIds); 
        
        return $this->render('TriebawerkeUserBundle:Company:userskills.html.twig',
                              array('entities' => $userSkills,
                                    'team'  => $team,                                  
                                   ));
    }
}

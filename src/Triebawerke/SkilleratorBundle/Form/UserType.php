<?php

namespace Triebawerke\SkilleratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
     
      
        $builder
            ->add('name')
            ->add('lastname')
            ->add('company', new CompanyType())
             ;

    }
    
    public function getDefaultOptions(array $options) 
    { 
    return array( 
    'data_class' => 'Triebawerke\SkilleratorBundle\Entity\User', 
    ); 
    } 

    public function getName()
    {
        return 'User';
    }
}

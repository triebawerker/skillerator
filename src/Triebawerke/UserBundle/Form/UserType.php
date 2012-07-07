<?php

namespace Triebawerke\UserBundle\Form; 

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {   
      $builder->add('username');
      $builder->add('email', 'email');
      $builder->add('password', 'repeated', array(
           'first_name' => 'password',
           'second_name' => 'confirm',
           'type' => 'password'
           ));
      $builder->add('company');
    }
    
    public function getDefaultOptions(array $options) 
    { 
    return array( 
    'data_class' => 'Triebawerke\UserBundle\Entity\User', 
    ); 
    } 

    public function getName()
    {
        return 'User';
    }
}

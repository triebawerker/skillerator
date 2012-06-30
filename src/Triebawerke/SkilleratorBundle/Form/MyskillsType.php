<?php

namespace Triebawerke\SkilleratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MyskillsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
    $builder->add('skills', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:Skill',
                  ))
            ->add('levels', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:Level',
                  ))
            ->add('certificates', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:Certificate',
                  ))
//            ->add('users', 'entity', array(
//                  'class' => 'TriebawerkeUserBundle:User',
//                  ))
                  
    
            ->add('goals', 'entity', array(
              'class' => 'TriebawerkeSkilleratorBundle:Goal',
              ))
              ; 

    }

    public function getName()
    {
        return 'triebawerke_skilleratorbundle_userskilltype';
    }
}

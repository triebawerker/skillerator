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
            ->add('users', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:User',
                  ))
                  ; 

    }

    public function getName()
    {
        return 'triebawerke_skilleratorbundle_userskilltype';
    }
}

<?php

namespace Triebawerke\SkilleratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class GoalType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
              ->add('levels', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:Level',
                  ))
              ->add('certificates', 'entity', array(
                  'class' => 'TriebawerkeSkilleratorBundle:Certificate',
                  ))
              ->add('comment');
    }

    public function getName()
    {
        return 'triebawerke_skilleratorbundle_goaltype';
    }
}

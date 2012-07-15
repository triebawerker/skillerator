<?php

namespace Triebawerke\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('nickname')
            ->add('company')
        ;
    }

    public function getName()
    {
        return 'triebawerke_skilleratorbundle_teamtype';
    }
}

<?php

namespace Triebawerke\SkilleratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('street')
            ->add('city')
            ->add('web')
            ;
    }

    public function getDefaultOptions(array $options)
    {
      return (array(
          'data_class' => 'Triebawerke\SkilleratorBundle\Entity\Company',
      ));
    }

    public function getName()
    {
        return 'Company';
    }
}


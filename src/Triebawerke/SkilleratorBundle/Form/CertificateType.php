<?php

namespace Triebawerke\SkilleratorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CertificateType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
        ;
    }

    public function getName() {
      return 'triebawerke_skilleratorbundle_certificatetype';
    }
}

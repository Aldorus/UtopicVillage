<?php

namespace Exod\Bundle\UtopicVillageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('idFonctionel')
        ;
    }

    public function getName()
    {
        return 'exod_bundle_utopicvillagebundle_roletype';
    }
}

<?php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Ens\JobeetBundle\Entity\Job as Job;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category');
        $builder->add('type');
        $builder->add('company');
        $builder->add('logo');
        $builder->add('url');
        $builder->add('position');
        $builder->add('location');
        $builder->add('description');
        $builder->add('how_to_apply');
        $builder->add('token');
        $builder->add('is_public');
        $builder->add('email');

        $builder->add('type', 'choice', array(
            'choices' => Job::getTypes(),
            'expanded' => true
        ));
    }

    public function getName()
    {
        return 'ens_jobeetbundle_jobtype';
    }
}
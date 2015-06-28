<?php

namespace Weekies\WeekiesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DinnerEntryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('date', 'date');
        $builder->add('amountOfPeople', 'integer');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Weekies\WeekiesBundle\Model\DinnerEntry',
        ));
    }

    public function getName()
    {
        return 'DinnerEntry';
    }
}
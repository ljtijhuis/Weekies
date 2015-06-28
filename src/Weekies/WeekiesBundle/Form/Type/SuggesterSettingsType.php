<?php

namespace Weekies\WeekiesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuggesterSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('DinnerEntries', 'collection', array(
            'type' => new DinnerEntryType(), 
            'allow_add' => 'true'
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Weekies\WeekiesBundle\Model\SuggesterSettings',
        ));
    }

    public function getName()
    {
        return 'SuggesterSettings';
    }
}
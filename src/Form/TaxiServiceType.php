<?php

namespace App\Form;

use App\Entity\TaxiService;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use A2lix\TranslationFormBundle\Form\Type\TranslationsType;

class TaxiServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('translations', TranslationsType::class)
            ->add('category')
            ->add('updatedAt')
            ->add('alternativeText')
            ->add('origin')
            ->add('destination')
            ->add('intermedialPlaces')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TaxiService::class,
        ]);
    }
}

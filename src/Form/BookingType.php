<?php

namespace App\Form;

use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\DataHelpers\CurrencyRelations;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $currencies = new CurrencyRelations();
        $builder
            ->add('travelDate')
            ->add('travelTime')
            ->add('comment')
            ->add('currency', ChoiceType::class, [
                                        'choices' => array_combine(
                                                array_keys($currencies->currencies),
                                                array_keys($currencies->currencies)
                                        )])
            ->add('origin')
            ->add('destination')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}

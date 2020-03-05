<?php

namespace App\Form;

use App\Entity\Image;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageUploadType extends AbstractType
{


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options):void
    {
        $builder
            ->add(
                'imageFile',
                VichImageType::class,
                [
                    'label'    => 'Upload an Image',
                    'attr'     => ['required' => false],
                    'required' => false,
                ]
            )
            ->add('description', null, ['label' => 'Image description']);

    }//end buildForm()


    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver):void
    {
        $resolver->setDefaults(['data_class' => Image::class]);

    }


}//end class

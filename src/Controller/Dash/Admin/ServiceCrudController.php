<?php

namespace App\Controller\Dash\Admin;

use App\Entity\Image;
use App\Entity\Service;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ServiceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Service::class;
    }

    public function configureFields(string $pageName): iterable
    {

        $filterPlaces = function (QueryBuilder $queryBuilder) {
            return $queryBuilder->resetDQLPart('from')
                ->select('p')->from('App:Place', 'p')

                ->where('p.translatedEntity IS NULL');
        };

        return [
            IdField::new('id')->onlyOnIndex()->hideOnForm(),
            BooleanField::new('isMainLanguage')->hideOnForm()->setLabel('Principal'),
//
            AssociationField::new('translatedEntity')
                ->setLabel('Traducción de')
                ->setHelp('Seleccione el "Lugar" que desea traducir'),
            ChoiceField::new('currentLang')->setChoices(fn () => ['es' => 'es', 'en' => 'en']),

//            FormField::addPanel('Descripción del Lugar'),
            TextField::new('name')->setLabel('Nombre'),
            TextEditorField::new('description')->setLabel('Descripción'),

            AssociationField::new('origin')
                ->setLabel('Lugar de Origen')
                ->setQueryBuilder($filterPlaces),
            AssociationField::new('intermediatePlaces')
                ->setLabel('Lugares de Transito')
                ->setQueryBuilder($filterPlaces),

            AssociationField::new('destination')
                ->setLabel('Lugar de Destino')
                ->setQueryBuilder($filterPlaces),

//
//            FormField::addPanel('Imagen destacada y Galería'),
            ImageField::new('image')
                ->setUploadedFileNamePattern(Image::UPLOADED_FILE_NAME_PATTERN)
                ->setBasePath(Image::BASE_PATH)
                ->setUploadDir(Image::UPLOAD_DIR)
                ->setHelp('Imagen destacada'),
            AssociationField::new('images')->autocomplete()->setLabel('Otras Imagenes'),

        ];
    }
}

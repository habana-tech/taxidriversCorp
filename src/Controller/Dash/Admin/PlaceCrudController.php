<?php

namespace App\Controller\Dash\Admin;

use App\Entity\Image;
use App\Entity\Place;
use Doctrine\ORM\QueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PlaceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Place::class;
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
//            BooleanField::new('isMainLanguage')
//                ->hideOnForm()
//                ->setVirtual()
//                ->setLabel('Principal'),

            AssociationField::new('translatedEntity')
                ->setQueryBuilder($filterPlaces)
                ->setLabel('Traducción de')
                ->setHelp('Seleccione el "Lugar" que desea traducir'),

//            FormField::addPanel('Descripción del Lugar'),
            TextField::new('name')->setLabel('Nombre'),
            TextEditorField::new('description')->setLabel('Descripción'),

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

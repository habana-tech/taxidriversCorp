<?php

namespace App\Controller\Dash\Admin;

use App\Entity\Image;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Image::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            ImageField::new('filename')
                ->setUploadDir(Image::UPLOAD_DIR)
                ->setUploadedFileNamePattern(Image::UPLOADED_FILE_NAME_PATTERN)
                ->setBasePath(Image::BASE_PATH),
            TextField::new('description')
        ];
    }

}

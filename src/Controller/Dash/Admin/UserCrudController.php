<?php

namespace App\Controller\Dash\Admin;

use App\Entity\Image;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            IdField::new('id')->onlyOnIndex(),
            AvatarField::new('robotAvatar')->hideOnForm(),
            TextField::new('email'),
            CollectionField::new('roles'),

//                ->setUploadDir('public/uploads/users/')
//                ->setBasePath('uploads/users/')
//            ->setUploadedFileNamePattern('[slug]-[contenthash].[extension]'),
            TextField::new('plainPassword')
                ->onlyOnForms()
                ->setHelp('Set only for change the current password')

        ];
    }

}

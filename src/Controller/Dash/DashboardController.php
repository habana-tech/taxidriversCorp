<?php

namespace App\Controller\Dash;

use App\Entity\Image;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin", host="%domain.dash%")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            // the name visible to end users
            ->setTitle('TaxiDrivers Corp')
            // you can include HTML contents too (e.g. to link to an image)
            ->setTitle('<img src="images/logo-icon.png" class="h"> TaxiDrivers <span class="text-small">Corp.</span>')

            // the path defined in this method is passed to the Twig asset() function
            ->setFaviconPath('apple-touch-icon.png')


            // set this option if you prefer the page content to span the entire
            // browser width, instead of the default design which sets a max width
//            ->renderContentMaximized()

            // set this option if you prefer the sidebar (which contains the main menu)
            // to be displayed as a narrow column instead of the default expanded design
//            ->renderSidebarMinimized()

            // by default, all backend URLs include a signature hash. If a user changes any
            // query parameter (to "hack" the backend) the signature won't match and EasyAdmin
            // triggers an error. If this causes any issue in your backend, call this method
            // to disable this feature and remove all URL signature checks
//            ->disableUrlSignatures()
            ;
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            MenuItem::section('Content'),
            MenuItem::linkToCrud('Images', 'fa fa-image', Image::class),

            MenuItem::section('Management'),
            MenuItem::linkToCrud('Users', 'fa fa-users', User::class),
            ];
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        if ($user instanceof User) {
            return (parent::configureUserMenu($user))->setAvatarUrl($user->getRobotAvatar());
        }
        return parent::configureUserMenu($user);
    }
}

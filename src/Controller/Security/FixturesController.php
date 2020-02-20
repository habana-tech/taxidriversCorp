<?php

namespace App\Controller\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class FixturesController extends AbstractController
{
    /**
     * @Route("/register", name="app_register", )
     */
    public function register(Request $request, ManagerRegistry $managerRegistry, UserRepository $repository): Response
    {
        $admin = $repository->findOneBy(['email'=>'admin@habana.tech']);
        if($admin instanceof User)
            return new Response('User already exist');

       $admin = new User();
       $admin->setEmail('admin@habana.tech')->setRoles(['ROLE_USER', 'ROLE_EDITOR', 'ROLE_ADMIN', 'ROLE_SUPER_ADMIN']);
       $admin->setPassword('$2y$13$u8oayTragV6c8Pu5l3pOx.iAJ8slNdWeWbI25fFMs3ELvqRR3rhLq');

       $managerRegistry->getManager()->persist($admin);
       $managerRegistry->getManager()->flush();

       return new Response('User created');
    }

}

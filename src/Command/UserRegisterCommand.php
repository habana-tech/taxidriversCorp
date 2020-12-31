<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserRegisterCommand extends Command
{
    protected static $defaultName = 'user:register';
    /**
     * @var EntityManager
     */
    private EntityManager $entityManager;
    /**
     * @var EncoderFactoryInterface
     */
    private EncoderFactoryInterface $encoderFactory;

    /**
     * UserRegisterCommand constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager, EncoderFactoryInterface $encoderFactory)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->encoderFactory = $encoderFactory;
    }


    protected function configure()
    {
        $this
            ->setDescription('Register a new user')
            ->addArgument('email', InputArgument::REQUIRED, 'Email')
            ->addArgument('password', InputArgument::REQUIRED, 'password')
            ->addOption('admin', null, InputOption::VALUE_NONE, 'admin for get the ROLE_ADMIN')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        $user = new User();
        $user->setEmail($email);

        $encoder = $this->encoderFactory->getEncoder($user);
        $encodedPassword = $encoder->encodePassword($password, null);

        $user->setPassword($encodedPassword);

        if ($input->getOption('admin')) {
            $user->setRoles(['ROLE_ADMIN']);
        }

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success('Done!!');

        return Command::SUCCESS;
    }
}

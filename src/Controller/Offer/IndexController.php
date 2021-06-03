<?php

namespace App\Controller\Offer;

use App\Entity\Place;
use App\Form\EmailSubscribeType;
use App\Repository\PlaceRepository;
use App\TxdServices\ServicesCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bridge\Twig\Mime\NotificationEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
  * @Route("/", host="%domain.offer%", name="offer_")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(Request $request, TranslatorInterface $translator, MailerInterface $mailer): Response
    {
        $emailSubscribe = $this->createForm(EmailSubscribeType::class, null, [
            'method' => 'POST',
        ]);

        $emailSubscribe->handleRequest($request);
        if ($emailSubscribe->isSubmitted() && $emailSubscribe->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $email = $emailSubscribe->getData();

            $notification = (new NotificationEmail())->priority(Email::PRIORITY_NORMAL)
                ->subject('Suscripcion a ofertas de hoteles')
                ->markdown('
                El usuario con email **'.$email['email']. '** se suscribio para recibir informacion sobre las ofertas generales de hoteles')
                ;

            $mailer->send($notification);


            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            $this->addFlash('info', $translator->trans('You will recibe an email soon. Thanks'));
        }


        return $this->render('offer/index.html.twig', [
            'emailSubscribe' => $emailSubscribe->createView()
        ]);
    }


}

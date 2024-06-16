<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\User;
use App\Form\EvenementType;
use App\Form\EventFilterType;
use App\Repository\EvenementRepository;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/evenement')]
class EvenementController extends AbstractController
{

    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier){
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/', name: 'app_evenement_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EvenementRepository $evenementRepository): Response
    {

        /** @var User $user */
        $user = $this->getUser();

        $form = $this->createForm(EventFilterType::class);
        $form->handleRequest($request);

        $queryBuilder = $evenementRepository->createQueryBuilder('e');

        if ($user == null) {
            $queryBuilder->andWhere('e.is_public = :public')
                ->setParameter('public', true);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            if (!empty($data['titre'])) {
                $queryBuilder->andWhere('e.Titre LIKE :titre')
                    ->setParameter('titre', '%' . $data['titre'] . '%');
            }

            if (!empty($data['date'])) {
                $queryBuilder->andWhere('e.Date = :date')
                    ->setParameter('date', $data['date']);
            }
        }

        $evenements = $queryBuilder->getQuery()->getResult();
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
            'form' => $form->createView(),
        ]);


    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Associer l'utilisateur connecté à l'événement
            $user = $security->getUser();
            $evenement->setUser($user);


            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/inscription/{id}', name: 'app_evenement_inscription')]
    public function inscription(EvenementRepository $evenementRepository,Evenement $evenement,EntityManagerInterface $entityManager): Response
    {

        /** @var User $user */
        $user = $this->getUser();


        $user = $this->getUser(); // Récupérer l'utilisateur actuel

        if ($user) {
            $user->addEvenementInscrit($evenement);
            $entityManager->persist($evenement);
            $entityManager->flush();

            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('mailer@test.fr', 'test'))
                    ->to($user->getEmail())
                    ->subject('Inscription événement')
                    ->htmlTemplate('evenement/inscription.html.twig'));
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);

    }

    #[Route('/deinscription/{id}', name: 'app_evenement_deinscription')]
    public function deinscription(EvenementRepository $evenementRepository,Evenement $evenement,EntityManagerInterface $entityManager): Response
    {

        /** @var User $user */
        $user = $this->getUser();


        $user = $this->getUser(); // Récupérer l'utilisateur actuel

        if ($user) {
            $user->removeEvenementInscrit($evenement);
            $entityManager->persist($evenement);
            $entityManager->flush();

            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('mailer@test.fr', 'test'))
                    ->to($user->getEmail())
                    ->subject('Désincription événement')
                    ->htmlTemplate('evenement/desinscription.html.twig'));
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);

    }
}

<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ModifMdpFormType;
use App\Form\ModifProfileFormType;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\Routing\Matcher\match;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminController extends AbstractController
{

    #[Route('/', name: 'app_acceuil')]
    public function acceuil(): Response
    {
        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);


    }

    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        /** @var User $user */
        $user = $this->getUser();

        $evenements = $user->getEvenementsInscrits();

        if($user->isVerified()){
            return $this->render('admin/inscription.html.twig',[
                "evenements" => $evenements,
            ]);

        }else{
            return $this->render('admin/verify-email.html.twig');

        }

    }


    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        /** @var User $user */
        $user = $this->getUser();



        if($user->isVerified()){
            return $this->render('admin/index.html.twig');

        }else{
            return $this->render('admin/verify-email.html.twig');

        }

    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        $this->denyAccessUnlessGranted("IS_AUTHENTICATED_FULLY");

        /** @var User $user */
        $user = $this->getUser();



        if($user->isVerified()){
            return $this->render('admin/profile.html.twig');

        }else{
            return $this->render('admin/verify-email.html.twig');
        }
    }

    #[Route('/modifprofile/{id}/edit', name: 'app_modifprofile')]
    public function modifprofile(Request $request,User $user, EntityManagerInterface $entityManager): Response
    {

//      $user = new User();
        $form = $this->createForm(ModifProfileFormType::class, $user);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {



            $email = $form->get('email')->getData();
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //c'est bien une email
            } else {
                $this->addFlash('error', 'Incorrect email');
                return $this->render('admin/modifProfile.html.twig', [
                    'modifProfileForm' => $form->createView(),
                ]);
            }

//            $entityManager->persist($user);
            $entityManager->flush();



            // do anything else you need here, like send an email
            return $this->render('admin/profile.html.twig');

        }

        return $this->render('admin/modifProfile.html.twig', [
            'modifProfileForm' => $form->createView(),
        ]);
    }

    #[Route('/modifmdp/{id}/edit', name: 'app_modifmdp')]
    public function modifmdp(Request $request,User $user, EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(ModifMdpFormType::class, $user);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form->get('plainPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();

            if ($plainPassword !== $confirmPassword) {
                $this->addFlash('error', 'The password fields must match.');
                return $this->render('admin/modifMdp.html.twig', [
                    'modifMdpForm' => $form->createView(),
                ]);
            }

            $newPassword = $form->get('plainPassword')->getData();

            if ($newPassword) {
                // Encodage du mot de passe
                $encodedPassword = $passwordHasher->hashPassword($user, $newPassword);
                $user->setPassword($encodedPassword);
            }
            $entityManager->flush();



            return $this->render('admin/profile.html.twig');

        }

        return $this->render('admin/modifMdp.html.twig', [
            'modifMdpForm' => $form->createView(),
        ]);
    }


}

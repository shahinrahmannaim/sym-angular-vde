<?php

namespace App\Controller\API;

use App\Entity\Department;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class TestApiSignUpController extends AbstractController
{
    #[Route('/api/register/test', name: 'api_register', methods: ['POST'])]
    public function register(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, MailerInterface $mailer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
    
        $username = $data['username'] ?? '';
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';
        $departmentId = $data['department_id'] ?? null;
    
        // Validate the received data
        if (empty($username) || empty($email) || empty($password) || empty($departmentId)) {
            return $this->json(['error' => 'All fields are required'], Response::HTTP_BAD_REQUEST);
        }
    
        // Check if the username or email already exists
        if ($entityManager->getRepository(User::class)->findOneBy(['username' => $username])) {
            return $this->json(['error' => 'Username already exists'], Response::HTTP_BAD_REQUEST);
        }
    
        if ($entityManager->getRepository(User::class)->findOneBy(['email' => $email])) {
            return $this->json(['error' => 'Email already exists'], Response::HTTP_BAD_REQUEST);
        }
    
        // Create and persist the new user
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($passwordHasher->hashPassword($user, $password));
        $user->setVerified(false); // Set user as unverified
    
        // Set the department if provided
        $department = $entityManager->getRepository(Department::class)->find($departmentId);
        if ($department) {
            $user->setDepartment($department);
        } else {
            return $this->json(['error' => 'Invalid department ID'], Response::HTTP_BAD_REQUEST);
        }
    
        $entityManager->persist($user);
    
        // Try to flush
        try {
            $entityManager->flush();
            $this->sendConfirmationEmail($mailer, $user->getEmail());
    
            return $this->json(['message' => 'User registered successfully. Please check your email to confirm your registration.'], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create user: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    private function sendConfirmationEmail(MailerInterface $mailer, string $email): void
    {
        $confirmationLink = 'http://localhost:8000/email/confirm?email=' . urlencode($email);
        $emailMessage = (new Email())
            ->from('no-reply@yourdomain.com')
            ->to($email)
            ->subject('Email Confirmation')
            ->html('<p>Please confirm your registration by clicking <a href="' . $confirmationLink . '">here</a>.</p>');

        $mailer->send($emailMessage);
    }

    #[Route('/email/confirm', name: 'api_confirm', methods: ['GET'])]
    public function confirmEmail(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $email = $request->query->get('email');

        if (!$email) {
            return $this->json(['error' => 'No email provided'], Response::HTTP_BAD_REQUEST);
        }

        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            return $this->json(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        // Update the user to confirm their email
        if ($user->isVerified()) {
            return $this->json(['message' => 'Email already confirmed'], Response::HTTP_OK);
        }

        $user->setVerified(true); // Set user as verified
        $entityManager->flush();

        return $this->json(['message' => 'Email confirmed successfully'], Response::HTTP_OK);
    }
}

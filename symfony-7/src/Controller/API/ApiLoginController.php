<?php

namespace App\Controller\API;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api', name: 'api_')]
class ApiLoginController extends AbstractController
{
    #[Route('/login', name: 'login', methods: ['POST'])]
    public function login(
        ManagerRegistry $doctrine, 
        Request $request, 
        UserPasswordHasherInterface $passwordHasher, 
        JWTTokenManagerInterface $jwtManager
    ): JsonResponse 
    {
        // Decode the incoming request
        $decoded = json_decode($request->getContent(), true);
        $email = $decoded['email'];
        $plaintextPassword = $decoded['password'];

        // Find the user by email
        $user = $doctrine->getRepository(User::class)->findOneBy(['email' => $email]);

        // If user not found
        if (!$user) {
            return $this->json(['result' => false, 'message' => 'User not found'], 404);
        }

        // Validate the password
        if (!$passwordHasher->isPasswordValid($user, $plaintextPassword)) {
            return $this->json(['result' => false, 'message' => 'Invalid credentials'], 401);
        }

        // Extract and modify roles
        $roles = $user->getRoles();

        // Ensure that if user has ROLE_ADMIN, it only contains that role
        if (in_array('ROLE_ADMIN', $roles)) {
            $roles = ['ROLE_ADMIN'];
        } else {
            // Otherwise, just keep the existing roles or modify as necessary
            $roles = ['ROLE_USER'];
        }

        // Set the filtered roles back to the user
        $user->setRoles($roles);

        // Generate the JWT token after the roles are set
        $token = $jwtManager->create($user);

        // Return the token in the response
        return $this->json(['token' => $token]);
    }
}

<?php

namespace App\Controller\API\adminApi;

use App\Entity\Department;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/api/admin')] 
#[IsGranted('ROLE_ADMIN')] 
class ApiUserController extends AbstractController
{
    private UserRepository $userRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
        $this->userRepository = $userRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/users', name: 'index', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $users = $this->userRepository->findAll();

        $userData = [];
        foreach ($users as $user) {
            $department = $user->getDepartment();
            $roles = $user->getRoles();
            
            if (empty($roles)) {
                $roles = ['ROLE_USER'];
            }

            $userData[] = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'department' => $department ? [
                    'id' => $department->getId(),
                    'name' => $department->getName(),
                ] : null,
                'roles' => !empty($roles) ? $roles : null,
            ];
        }

        return new JsonResponse($userData, Response::HTTP_OK);
    }

    #[Route('/user/create', name: 'create_user', methods: ['POST'])]
    public function createUser(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $username = $data['username'] ?? '';
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';
        $departmentId = $data['department_id'] ?? null; // Get department_id from request

        // Validate the received data
        if (empty($username) || empty($email) || empty($password)) {
            return $this->json(['error' => 'All fields are required'], Response::HTTP_BAD_REQUEST);
        }

        // Check if the username or email already exists
        $existingUser = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        if ($existingUser) {
            return $this->json(['error' => 'Username already exists'], Response::HTTP_BAD_REQUEST);
        }

        $existingEmail = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($existingEmail) {
            return $this->json(['error' => 'Email already exists'], Response::HTTP_BAD_REQUEST);
        }

        // Create and persist the new user
        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($passwordHasher->hashPassword($user, $password));

        // Set the default role to ROLE_USER
      

        // Set the department if provided
        if ($departmentId) {
            $department = $entityManager->getRepository(Department::class)->find($departmentId);
            if ($department) {
                $user->setDepartment($department);
            } else {
                return $this->json(['error' => 'Invalid department ID'], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return $this->json(['error' => 'Department ID is required'], Response::HTTP_BAD_REQUEST);
        }

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json(['message' => 'User registered successfully'], Response::HTTP_CREATED);
    }

    #[Route('/user/{id}', name: 'get_user', methods: ['GET'])]
    public function getUserById(int $id): JsonResponse
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            return new JsonResponse(['message' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }

        $department = $user->getDepartment();
        $roles = $user->getRoles();

        $userData = [
            'id' => $user->getId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'department' => $department ? [
                'id' => $department->getId(),
                'name' => $department->getName(),
            ] : null,
            'roles' => !empty($roles) ? $roles : ['ROLE_USER'], // Default role if empty
        ];

        return new JsonResponse($userData, Response::HTTP_OK);
    }

    #[Route('/user/edit/{id}', name: 'edit_user', methods: ['PUT'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher, int $id): JsonResponse
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            return new JsonResponse(['message' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }
    
        $data = json_decode($request->getContent(), true);
    
        $username = $data['username'] ?? '';
        $email = $data['email'] ?? '';
        $password = $data['password'] ?? '';
        $departmentId = $data['department_id'] ?? null; // Get department_id from request
        $roles = $data['roles'] ?? null; // Get roles from request
    
        // Validate the received data
        if (empty($username) || empty($email)) {
            return $this->json(['error' => 'Username and email are required'], Response::HTTP_BAD_REQUEST);
        }
    
        // Check for existing username/email (excluding current user)
        $existingUser = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        if ($existingUser && $existingUser->getId() !== $user->getId()) {
            return $this->json(['error' => 'Username already exists'], Response::HTTP_BAD_REQUEST);
        }
    
        $existingEmail = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($existingEmail && $existingEmail->getId() !== $user->getId()) {
            return $this->json(['error' => 'Email already exists'], Response::HTTP_BAD_REQUEST);
        }
    
        // Update user data
        $user->setUsername($username);
        $user->setEmail($email);
    
        if (!empty($password)) {
            $user->setPassword($passwordHasher->hashPassword($user, $password));
        }
    
        // Update roles if provided
        if (!empty($roles)) {
            $user->setRoles($roles);
        }
    
        // Update department if provided
        if ($departmentId) {
            $department = $entityManager->getRepository(Department::class)->find($departmentId);
            if ($department) {
                $user->setDepartment($department);
            } else {
                return $this->json(['error' => 'Invalid department ID'], Response::HTTP_BAD_REQUEST);
            }
        }
    
        $entityManager->flush();
    
        return $this->json(['message' => 'User updated successfully'], Response::HTTP_OK);
    }
    
    

    #[Route('/user/delete/{id}', name: 'delete_user', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $user = $this->userRepository->find($id);
        if (!$user) {
            return new JsonResponse(['message' => 'User not found.'], Response::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($user);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'User deleted successfully.'], Response::HTTP_OK);
    }
}

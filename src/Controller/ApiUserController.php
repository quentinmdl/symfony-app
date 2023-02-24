<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiUserController extends AbstractController
{
    #[Route('/api/users', name: 'get_users', methods: 'GET')]
    public function getUsers(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();

        return $this->json($users);
    }
}

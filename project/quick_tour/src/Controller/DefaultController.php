<?php


// src/Controller/DefaultController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController
{
      #[Route('/', name: 'index')]
    public function index(LoggerInterface $logger): Response
    {
        $logger->info('We are logging! again');
        return new Response();
    }
}
<?php

namespace App\EventListener;

use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Event\TerminateEvent;
/**
 * Class LogApiUserEventListener
 */
class LogApiUserEventListener
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onKernelTerminate(TerminateEvent $event)
    {
        $request = $event->getRequest();
        $response = $event->getResponse();

        if (str_contains($request->getRequestUri(), User::API_ROUTE)) {
            $this->logger->info('data', [
                'method' => $request->getMethod(),
                'route' =>  $request->getRequestUri(),
                'status' => $response->getStatusCode(),
                'response' => json_decode($response->getContent(), true),
            ]);
        }

    }
}
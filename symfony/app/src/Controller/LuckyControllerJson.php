<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerJson
{
    #[Route("/api/quote")]
    public function getQuote(): JsonResponse
    {
        // List of possible quotes
        $quotes = ["We used to look up at the sky and wonder at our place in the stars.
            Now we just look down, and worry about our place in the dirt. - Interstellar",
           "Love is not something we invented. It's observable,
            powerful. It has to mean something. - Interstellar",
           "Mankind was born on Earth. It was never meant to die here. - Interstellar",];
    
        // Randomly select a quote from the list
        $quote = $quotes[array_rand($quotes)];
    
        // Get current date and time
        $now = new DateTimeImmutable();
    
        // Build JSON response
        $response = [
            'quote' => $quote,
            'date' => $now->format('Y-m-d'),
            'timestamp' => $now->getTimestamp(),
        ];
    
        return new JsonResponse($response);
    }
}

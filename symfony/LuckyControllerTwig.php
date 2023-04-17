<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyControllerTwig extends AbstractController
{
    #[Route('/report', name: 'report')]
    public function report(): Response
    {
        $reports = [
            'kmom01' => 'Text för kmom01',
            'kmom02' => 'Text för kmom02',
            'kmom03' => 'Text för kmom03',
            'kmom04' => 'Text för kmom04',            
            'kmom05' => 'Text för kmom05',
            'kmom06' => 'Text för kmom06',
            'kmom10' => 'Text för kmom10',
            
        ];

        return $this->render('report.html.twig', [
            'reports' => $reports,
        ]);
    }

}

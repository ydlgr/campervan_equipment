<?php

namespace App\Controller;

use App\Service\RentService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends BaseController
{
    public function __construct(private RentService $rentService)
    {}

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render(
            'base.html.twig',
            [
                'result' => $this->rentService->calculate()
            ]
        );
    }
}

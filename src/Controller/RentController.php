<?php

namespace App\Controller;

use App\Service\RentService;
use Symfony\Component\Routing\Annotation\Route;

class RentController extends BaseController
{
    public function __construct(private RentService $rentService)
    {}

    /**
     * @Route("/api", name="api", methods={"GET"})
     *
     */
    public function api()
    {
        return $this->createResponse
        (
            $this->rentService->calculate(),
            'success'
        );
    }
}

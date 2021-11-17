<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait ApiResponse
{
    /**
     * Basic Api Response
     *
     * @param array|null $data
     * @param string|null $message
     * @param int $status
     * @return JsonResponse
     */
    protected function createResponse(?array $data, ?string $message, int $status = Response::HTTP_OK): JsonResponse
    {
        $response = new JsonResponse();

        return $response
            ->setStatusCode($status)
            ->setData(
                [
                    'status' => $status,
                    'message' => $message,
                    'data' => $data
                ]
            );
    }
}

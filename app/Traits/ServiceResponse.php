<?php
namespace App\Traits;

trait ServiceResponse
{
    public function successResponse(string $message = 'Operation Successful'): array
    {
        return [
            'status' => true,
            'message' => $message,
        ];
    }

    public function errorResponse(string $message = 'Operation Failed'): array
    {
        return [
            'status' => false,
            'message' => $message,
        ];
    }
}

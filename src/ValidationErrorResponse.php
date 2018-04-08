<?php

namespace Difel\HTTPResponses;

use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class ValidationErrorResponse extends JsonResponse
{
    /**
     * ErrorResponse constructor.
     * @param \Exception|ValidationException $exception
     * @param int $status
     * @param array $headers
     * @param int $options
     * @internal param null $data
     * @internal param string $message
     * @internal param $data
     */
    public function __construct(ValidationException $exception, $message = null, $status = 422, $headers = [], $options = 0)
    {
        $body = [
            'message' => isset($message) ? $message : $exception->getMessage(),
            'data' => $exception->validator->getMessageBag()->getMessages()
        ];

        parent::__construct($body, $status, $headers, $options);
    }
}
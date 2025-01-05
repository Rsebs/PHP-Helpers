<?php

namespace Submodules\PhpHelpers\Traits;

use Illuminate\Database\Eloquent\Collection;

trait ApiResponse
{
  protected function successResponse(
    array|Collection $data,
    string $message = 'Success!',
    array $paginate = [],
    int $statusCode = 200,
  ) {
    return response()->json([
      'message' => $message,
      'data' => $data,
      'paginate' => $paginate,
    ], $statusCode);
  }

  protected function errorResponse(
    array|string $errors,
    string $message = 'Something was wrong!',
    int $statusCode = 400,
  ) {
    return response()->json([
      'message' => $message,
      'errors' => $errors,
    ], $statusCode);
  }
}

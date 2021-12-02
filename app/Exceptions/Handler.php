<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Str;
use Throwable;

class Handler extends ExceptionHandler {
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register() {
        $this->reportable(function(Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception) {

        if($request->wantsJson() or Str::startsWith($request->route()->uri, 'api/')) {

            if($exception instanceof ModelNotFoundException) {
                return response()->json(['message' => 'Registro não encontrado em ' . str_replace('App\\Models\\', '', $exception->getModel())], 404);
            }
            if($exception instanceof ValidationException) {
                $errors = $exception->validator->getMessageBag();
                return response()->json([
                    'message' => "Falha na validação dos dados.",
                    'errors'  => $errors,
                ], 422);
            }
        }

        return parent::render($request, $exception);
    }
}

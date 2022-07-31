<?php

declare(strict_types=1);

namespace WebGarden\Termite\Http\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

abstract class Middleware
{
    abstract public function __invoke(Request $request, Response $response, callable $next): Response;
}

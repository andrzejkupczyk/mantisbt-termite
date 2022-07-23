<?php

declare(strict_types=1);

namespace WebGarden\Termite\Http;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

abstract class Action
{
    public function __construct(protected ContainerInterface $container)
    {
    }

    abstract public function __invoke(
        Request $request,
        Response $response,
        array $args
    ): Response;
}

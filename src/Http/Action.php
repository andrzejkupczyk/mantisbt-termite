<?php

declare(strict_types=1);

namespace WebGarden\Termite\Http;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

abstract class Action
{
    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    abstract public function __invoke(
        Request $request,
        Response $response,
        array $args
    ): Response;
}

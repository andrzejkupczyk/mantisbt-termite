<?php

declare(strict_types=1);

namespace WebGarden\Termite\Http\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

class DetermineCurrentPlugin extends Middleware
{
    public function __invoke(Request $request, Response $response, callable $next): Response
    {
        if (!plugin_get_current() && $basename = $this->determineBasename($request)) {
            plugin_push_current($basename);
        }

        return $next($request, $response);
    }

    /**
     * Determine plugin basename based on the route pattern
     *
     * @return string|null
     */
    protected function determineBasename(Request $request)
    {
        /** @var \Slim\Route $route */
        $route = $request->getAttribute('route');

        foreach ($route->getGroups() as $group) {
            if (preg_match('/plugins\/(?P<basename>[a-z]+)/i', $group->getPattern(), $matches)) {
                return $matches['basename'];
            }
        }

        return null;
    }
}

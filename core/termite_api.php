<?php

declare(strict_types=1);

if (!function_exists('helper_api_url')) {
    /**
     * Build URL to the given API endpoint within the plugin's route group.
     */
    function helper_api_url(string $endpoint, string $pluginBaseName = null): string
    {
        return helper_mantis_url(vsprintf('api/rest%s/%s', [
            plugin_route_group($pluginBaseName),
            $endpoint,
        ]));
    }
}

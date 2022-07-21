<?php

declare(strict_types=1);

namespace WebGarden\Termite;

use MantisPlugin;
use WebGarden\Termite\Concerns\DefinesProperties;

/**
 * @see https://www.mantisbt.org/docs/master/en-US/Developers_Guide/html-desktop/#dev.plugins
 */
abstract class TermitePlugin extends MantisPlugin
{
    use HasConcerns;

    public function register(): void
    {
        $properties = $this->concern(DefinesProperties::class);

        $this->name = $properties->name ?? plugin_lang_get('name');
        $this->description = $properties->description ?? plugin_lang_get('description');

        $this->page = $properties->page;

        $this->version = $properties->version ?? '0.1.0';
        $this->requires = $properties->requires ?? ['MantisCore' => MANTIS_VERSION];

        $this->author = $properties->author;
        $this->contact = $properties->contact;
        $this->url = $properties->url;
    }
}

<?php

declare(strict_types=1);

namespace WebGarden\Termite;

use MantisPlugin;

/**
 * @see https://www.mantisbt.org/docs/master/en-US/Developers_Guide/html-desktop/#dev.plugins
 */
abstract class TermitePlugin extends MantisPlugin
{
    public $requires = [
        'MantisCore' => '2.25.0',
    ];

    public function register()
    {
        $this->name = plugin_lang_get_defaulted('name', $this->name);
        $this->description = plugin_lang_get_defaulted('description', $this->description);
    }
}

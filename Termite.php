<?php

declare(strict_types=1);

use WebGarden\Termite\TermitePlugin as BasePlugin;

require_once __DIR__ . '/vendor/autoload.php';

class TermitePlugin extends BasePlugin
{
    public function register()
    {
        parent::register();

        $this->version = '1.0.0';
        $this->author = 'Andrzej Kupczyk';
        $this->contact = 'kontakt@andrzejkupczyk.pl';
        $this->url = 'https://github.com/thewebgarden/mantisbt-termite';
    }
}

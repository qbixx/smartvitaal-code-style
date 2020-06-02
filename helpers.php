<?php

namespace SmartVitaal;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function rules(Finder $finder, array $rules = []) : Config
{
    $rules = array_merge(require __DIR__ . '/rules.php', $rules);

    return Config::create()
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}

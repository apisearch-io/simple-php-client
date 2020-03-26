<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'single_line_after_imports' => false,
        'no_superfluous_phpdoc_tags' => false,
        'single_line_throw' => false
    ])
    ->setFinder($finder)
;
<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/core',
        __DIR__.'/public',
    ])
    ->name('*.php');

return (new PhpCsFixer\Config())->setRules([
    '@Symfony' => true,
    'echo_tag_syntax' => false,
    'no_alternative_syntax' => false,
])
    ->setFinder($finder);

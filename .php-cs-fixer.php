<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);
;

$config = new Config();
return $config->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'single_quote' => true,
    'array_indentation' => true,
    'whitespace_after_comma_in_array' => true,
    'ordered_imports' => ['imports_order' => ['class', 'function', 'const'], 'sort_algorithm' => 'length'],
    'binary_operator_spaces' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'trim_array_spaces' => true,
    'concat_space' => ['spacing' => 'one'],
    'method_chaining_indentation' => true,
    'function_typehint_space' => true,
])
    ->setFinder($finder)
;
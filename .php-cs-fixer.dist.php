<?php

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@Symfony' => true,
    '@Symfony:risky' => true,
    'array_syntax' => ['syntax' => 'long'],
    'combine_consecutive_unsets' => true,
    // one should use PHPUnit methods to set up expected exception instead of annotations
    'general_phpdoc_annotation_remove' => ['expectedException', 'expectedExceptionMessage', 'expectedExceptionMessageRegExp'],
    'heredoc_to_nowdoc' => true,
    'no_extra_consecutive_blank_lines' => ['break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block'],
    'no_unreachable_default_argument_value' => true,
    'no_useless_else' => true,
    'no_useless_return' => true,
    'ordered_class_elements' => true,
    'ordered_imports' => true,
    'php_unit_strict' => true,
    'phpdoc_add_missing_param_annotation' => true,
    'phpdoc_order' => true,
    'psr4' => true,
    'strict_comparison' => true,
    'strict_param' => true,
])
->setRiskyAllowed(true)
;

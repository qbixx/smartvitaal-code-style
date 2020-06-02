<?php

return [
    '@PSR1' => true,
    '@PSR2' => true,
    '@PHP70Migration' => true,
    '@PHP70Migration:risky' => true,
    '@PHP71Migration' => true,
    '@PHP71Migration:risky' => true,
    '@PHP73Migration' => true,
    '@PHPUnit75Migration:risky' => true,
    'array_syntax' => ['syntax' => 'short'],
    'final_class' => false,
    'new_with_braces' => false,
    'strict_comparison' => true,
    'no_trailing_comma_in_list_call' => false,
    'no_trailing_comma_in_singleline_array' => true,
    'blank_line_before_statement' => true,
    'linebreak_after_opening_tag' => true,
    'list_syntax' => ['syntax' => 'short'],
    'constant_case' => ['case' => 'lower'],
    'mb_str_functions' => true,
    'class_attributes_separation' => ['elements' => ['method']],
    'no_extra_blank_lines' => [
        'break',
        'continue',
        'curly_brace_block',
        'extra',
        'parenthesis_brace_block',
        'return',
        'square_brace_block',
        'throw',
        'use',
        'use_trait',
        'switch',

        'case',
        'default',
    ],
    'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
    'no_blank_lines_before_namespace' => false,
    'not_operator_with_successor_space' => true,
    'nullable_type_declaration_for_default_null_value' => true,
    'phpdoc_line_span' => [
        'const' => 'multi',
        'method' => 'multi',
        'property' => 'multi',
    ],
    'increment_style' => ['style' => 'pre'],
    'self_static_accessor' => true,
    'static_lambda' => true,
];
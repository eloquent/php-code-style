<?php

namespace Eloquent\CodeStyle;

use PhpCsFixer\Config as CsFixerConfig;
use PhpCsFixer\Finder;

final class Config
{
    public static function create(string $in): CsFixerConfig
    {
        $config = new CsFixerConfig();
        $config->setFinder(Finder::create()->in($in));

        $config->setRules([
            '@PSR2' => true,

            'array_syntax' => ['syntax' => 'short'],
            'binary_operator_spaces' => false,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => ['statements' => ['return']],
            'braces' => false,
            'cast_spaces' => true,
            'class_attributes_separation' => ['elements' => ['method' => 'one']],
            'class_definition' => ['single_line' => false],
            'concat_space' => ['spacing' => 'one'],
            'declare_equal_normalize' => true,
            'function_typehint_space' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'increment_style' => ['style' => 'pre'],
            'linebreak_after_opening_tag' => true,
            'lowercase_cast' => true,
            'multiline_whitespace_before_semicolons' => ['strategy' => 'no_multi_line'],
            'native_function_casing' => true,
            'new_with_braces' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_trailing_comma_in_singleline' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unused_imports' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'object_operator_without_whitespace' => true,
            'ordered_imports' => true,
            'phpdoc_align' => true,
            'phpdoc_indent' => true,
            'phpdoc_no_package' => true,
            'phpdoc_scalar' => true,
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'phpdoc_types' => true,
            'return_type_declaration' => true,
            'short_scalar_cast' => true,
            'single_blank_line_before_namespace' => true,
            'single_line_comment_style' => ['comment_types' => ['hash']],
            'single_quote' => true,
            'space_after_semicolon' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'whitespace_after_comma_in_array' => true,
        ]);

        return $config;
    }
}

# Changelog

All notable changes to `laravel-pint-config` will be documented in this file.

## v1.5.0 - 2026-10-11

- Require PHP 8.3
- Drop Laravel 10 and 11 support (Laravel 12 and 13 supported)
- Drop deprecated and redundant Pint rules; `no_superfluous_phpdoc_tags` now follows the Laravel preset again (keeps `@param mixed` and unused `@param` tags)

## v1.4.2 - 2026-03-18

- Laravel 13

## v1.4.1 - 2025-09-05

- `ordered_class_elements`: order constants public → protected → private, add abstract properties and `phpunit`
- `trailing_comma_in_multiline`: add `arguments` and `array_destructuring`
- `method_argument_space`: place attributes standalone

## v1.4.0 - 2025-03-09

- use `exclude`, `notName` and `notPath` from `pint.local.json`

## v1.3.1 - 2025-02-22

- Laravel 12
- Require PHP 8.1, drop Laravel 8 and 9 support

## v1.3.0 - 2024-02-04

- Support Laravel 11 #13

## v1.2.10 - 2023-07-14

- `nullable_type_declaration_for_default_null_value`: use nullable type declaration

## v1.2.9 - 2023-07-14

- add `nullable_type_declaration_for_default_null_value`

## v1.2.8 - 2023-05-12

- add `method_argument_space` with `ensure_fully_multiline`

## v1.2.7 - 2023-02-16

- Laravel 10

## v1.2.6 - 2023-01-15

- add `align_multiline_comment`, `declare_parentheses`, `method_chaining_indentation`, `no_superfluous_phpdoc_tags`, `ordered_traits`, `simplified_if_return` and `strict_comparison`

## v1.2.5 - 2022-12-15

- add `single_space_after_construct`

## v1.2.4 - 2022-12-10

- fix merging `pint.local.json` rules on PHP 8.0

## v1.2.3 - 2022-12-10

- show a message after publishing
- `trailing_comma_in_multiline`: remove `arguments`

## v1.2.2 - 2022-12-10

- publish directly to `pint.json` instead of modifying the package's `pint.dist.json`
- fix invalid JSON in `pint.dist.json`

## v1.2.1 - 2022-12-10

- no functional changes

## v1.2.0 - 2022-12-10

- support `pint.local.json`
- add `trailing_comma_in_multiline`

## v1.1.3 - 2022-11-05

- fix changelog workflow

## v1.1.2 - 2022-11-05

- add `assign_null_coalescing_to_coalesce_equal`, `blank_line_between_import_groups`, `get_class_to_class_keyword`, `implode_call`, `modernize_strpos`, `new_with_braces`, `ordered_class_elements`, `single_trait_insert_per_statement`, `ternary_to_null_coalescing` and `void_return`

## v1.1.1 - 2022-10-22

- relax `spatie/laravel-package-tools` constraint for Laravel 8

## v1.1.0 - 2022-10-22

- Laravel 8
- remove `simplified_null_return`

## v1.0.0 - 2022-10-22

- initial release

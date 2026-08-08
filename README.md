# Moodle Block: My First Block

A simple Moodle block plugin that displays the total number of courses on the site, built as a learning project.

## What it does

Displays current number of courses on the site, pulled live from the database.

## Structure

- `version.php` — Plugin version metadata
- `block_myfirstblock.php` — Main block class (extends `block_base`)
- `lang/en/block_myfirstblock.php` — Language strings

## Points

- Moodle plugin folder structure and naming conventions
- The `$DB` Database API (`count_records`)
- Inheritance from Moodle core classes (`block_base`)
- The `get_string()` / language string system


## Requirements

- Moodle 4.5+
- PHP 8.1–8.3

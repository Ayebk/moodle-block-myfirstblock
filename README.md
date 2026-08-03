# Moodle Block: My First Block

A simple Moodle block plugin that displays the total number of courses on the site, built as a learning project while preparing for a Moodle development role at Tel-Hai University.

## What it does

Displays a block on the Moodle dashboard showing the current number of courses on the site, pulled live from the database.

## Structure

- `version.php` — Plugin version metadata
- `block_myfirstblock.php` — Main block class (extends `block_base`)
- `lang/en/block_myfirstblock.php` — Language strings

## What I learned building this

- Moodle plugin folder structure and naming conventions
- The `$DB` Database API (`count_records`)
- Inheritance from Moodle core classes (`block_base`)
- The `get_string()` / language string system

## Status

This is an early-stage learning project.

## Requirements

- Moodle 4.5+
- PHP 8.1–8.3
# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

PHP library (Nette framework extension) for generating XML product feeds for e-commerce platforms. Package name: `makr/feed`.

## Commands

```bash
# Install dependencies
composer install

# Run feed export (requires Kdyby/Console setup in host application)
php index.php Feed:export

# Show available export configurations
php index.php Feed:export -s
```

No build process or tests configured.

## Architecture

### Core Pattern

The library uses a **Template Method pattern** where each feed platform has:
- `Generator.php` - Extends `BaseGenerator`, implements `generate()` to fetch products and call `addItem()`
- `Item.php` - Extends `BaseItem`, defines product properties with `@required` docblock for validation
- `latte/` templates - XML templates for header, item, and footer rendering

### Key Base Classes

- `src/Generators/BaseGenerator.php` - Abstract generator handling file I/O and Latte template rendering
- `src/Generators/BaseItem.php` - Abstract item with reflection-based validation (checks `@required` annotations on public properties)
- `src/DI/FeedExtension.php` - Nette DI extension for configuration

### Supported Platforms

Each has its own namespace under `src/Generators/`:
- **Zbozi** - Czech shopping comparison (zbozi.cz)
- **Heureka** - Czech shopping comparison (heureka.cz)
- **HeurekaAvailability** - Heureka stock feed variant
- **Mall** - Czech marketplace
- **Acra** - Russian e-commerce
- **Google** - Google Merchant Center
- **Custom** - Generic customizable feed
- **Luigi** - Italian platform
- **Shoptet** - E-commerce platform

### Flow

1. Host application creates a Generator subclass
2. `generate()` method fetches products from database
3. For each product, create an `Item`, set properties, call `addItem()`
4. Items are validated via reflection (checking `@required` properties)
5. Latte templates render XML fragments
6. `Storage` class formats final XML via DOM and saves to disk

## Nette Configuration

```neon
extensions:
    feed: Mk\Feed\DI\FeedExtension

feed:
    exportsDir: '%wwwDir%'
    exports:
        heureka: \App\Models\HeurekaGenerator
        zbozi: \App\Models\ZboziGenerator
```

## Adding New Properties to Items

When adding properties to Item classes, use `@required` in the docblock for mandatory fields:

```php
/** @var string @required */
public $productName;
```

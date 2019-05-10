# Content Templates

Gutenberg is capabable for defining default blocks for a new created post type.

## Installation

`$ composer require horttcore/wp-content-templates`

## Documentation

```php
<?php
/**
 * @param string $postType Post type
 * @param array $template Template
 * @param string $templateLock Lock template empty string, all or insert
 *      all — prevents all operations. It is not possible to insert new blocks, move existing blocks, or delete blocks.
 *      insert — prevents inserting or removing blocks, but allows moving existing blocks.
 */
ContentTemplate( string $postType, array $blocks [, string $templateLock <'insert'|'all'>] );
```

## Example

```php
<?php
use Horttcore\ContentTemplates\ContentTemplate;

new ContentTemplate('post', [
    [
        [ 'core/image', {} ],
        [ 'core/paragraph', { placeholder: 'Image Details' } ],
    ]
])->register();
```

## Changelog

### v1.0.2 - 2019/05/10

-   Small fix

### v1.0.1 - 2019/05/10

-   Changed: Parameter `$blocks` is required in the constructor
-   Improved documentation

### v1.0 - 2019/05/09

-   Initial release

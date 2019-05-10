# Content Templates

Gutenberg is capabable for defining default blocks for a new created post type.

## Installation

`$ composer require horttcore/content-templates`

## Documentation

```php
<?php
ContentTemplate( $postType, $blocks );
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

### v1.0 - 2019/05/10

-   Initial release

# Bloge Twig renderer

[Twig](https://github.com/twigphp/Twig) – Smarty-like template engine compiler for 
PHP. Twig renderer is adapter of Twig for Bloge.

## Documentation

Twig renderer `\Bloge\Renderers\Twig` requires one argument absolute `$path` 
where templates are located and second optional argument `$options` is array for 
specifying additional options to Twig.

Example:

```php
use Bloge\Renderers\Twig;

$renderer = new Twig(__DIR__ . '/theme', [
    'cache' => __DIR__ . '/cache'
]);
```

Then you can plug this renderer into basic or advanced app:

```php
use Bloge\Apps\BasicApp;

// ...

return new BasicApp($content, $renderer);
```
![Marko Cupic](docs/logo.png?raw=true "Marko Cupic")

# Contao Article Class Select Bundle

With this extension for Contao 4 you can inject two more classes in the article settings of the contao backend.

The extension comes with a customized article template,
in which an additional DIV element has been built in to use the Bootstrap container classes.

## Inject a **container-** and a **background** CSS class

![Alt text](docs/backend.png?raw=true "Backend")

## Frontend

![Alt text](docs/frontend.png?raw=true "Frontend")

## Configuration

To replace the preconfigured classes with your own classes, you have two options.

*The modern way:*

```
# Inside your config/config.yaml you write:

markocupic_article_class_select:
  container_class:
    - container-sm
    - container-lg
    - container-fluid

  background_class:
    - white-background
    - gray-background
    - my-dark-background
```

*In a more classic way:*

```
<?php

// Inside your contao/dca/article.php you write:

$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass']['options'] = [
    'container-sm',
    'container-lg',
    'container-fluid',
];

$GLOBALS['TL_DCA']['tl_article']['fields']['backgroundClass']['options'] = [
    'white-background',
    'gray-background',
    'dark-background',
];
```

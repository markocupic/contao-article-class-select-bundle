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

```yaml
# Inside your config/config.yaml you write:

markocupic_article_class_select:
    container_class:
        - 'container'
        - 'container p-0'
        - 'container px-0'
        - 'container py-0'
        - 'container-fluid'
        - 'container-fluid p-0 m-0'

    background_class:
        - 'white-background'
        - 'gray-background'
        - 'my-dark-background'

    # margins
    margin_mobile_class:
        - 'my-xs-4'

    margin_tablet_class:
        - 'my-md-5'

    margin_desktop_class:
        - 'my-lg-5'

    # paddings
    padding_mobile_class:
        - 'p-xs-4'

    padding_tablet_class:
        - 'p-md-5'

    padding_desktop_class:
        - 'p-lg-5'
    -
```

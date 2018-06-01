# Text Highlight Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Text Highlight plugin allows you to highlight the most important parts of your content.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
plugins:
  - text-highlight
```

## Usage in page content

Highlight text
```
[text-highlight]Text to highlight[/text-highlight]
```

Highlight text and set specific class
```
[text-highlight class="class-name"]Text to highlight[/text-highlight]
```

Highlight text, set specific class and set colors
```
[text-highlight class="class-name" background="red" color="white"]Text to highlight[/text-highlight]
```

## Usage in the template

Define Flextype namespace in the template if it is not defined yet.
```
<?php namespace Flextype; ?>
```

Highlight text
```
<?php echo textHighlight('Text to highlight', 'class-name', 'red', 'white'); ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/text-highlight/blob/master/LICENSE)

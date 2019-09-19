# Text Highlight Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.3.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.4-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Text Highlight plugin allows you to highlight the most important parts of your content.

## Installation
Unzip plugin to the folder `/site/plugins/`

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

Highlight text
```html
{{ textHighlight('Text to highlight', 'class-name', 'red', 'white') }}
```

## Settings

enabled: true or false to disable the plugin

```yaml
enabled: true
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/sitemap/blob/master/LICENSE) Copyright (c) 2018-2019 [Sergey Romanenko](https://github.com/Awilum)

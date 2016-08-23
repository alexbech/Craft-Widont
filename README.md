# Widont plugin for Craft CMS

Widont is a twig filter that prevents widow words in paragraphs.

## Installation

To install Widont, follow these steps:

1. Download & unzip the file and place the `widont` sub-directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

Widont works on Craft 2.5.x.

## Usage

```twig
{{ someRichText | widont }}
```

## Example

The following rich text field output:

```html
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
```

turns into this:

```html
<p>Lorem ipsum dolor sit amet, consectetur adipisicing&nbsp;elit.</p>
```

## Credit
Spider Web icon by Muhamad Ulum from the Noun Project

## Changelog

### 1.0.0 -- 2016.08.23

* Initial release

Brought to you by [Alexander Bech](http://vaersaagod.no)
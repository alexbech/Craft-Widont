# Widont Twig Filter for Craft CMS

Widont is a twig filter that prevents widow words in paragraphs.
It replaces the space between the nth-last words in a string with ``&nbsp;``
Works in these block tags ``(h1-h6, p, li)`` and also accounts for potential closing inline elements ``a, em, strong, span, b, i``

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

The following:

```html
{{ someRichText | widont }}
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
```

output this:

```html
<p>Lorem ipsum dolor sit amet, consectetur adipisicing&nbsp;elit.</p>
```

But you can also control how many words to `force break`:

```html
{{ someRichText | widont(2) }}
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
```

output this:

```html
<p>Lorem ipsum dolor sit amet, consectetur&nbsp;adipisicing&nbsp;elit.</p>
```

## Credit
Spider Web icon by Muhamad Ulum from the Noun Project

## Changelog

### 1.0.0 -- 2016.08.23

* Initial release

Brought to you by [Alexander Bech](http://vaersaagod.no)
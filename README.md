# Widont Twig Filter for Craft CMS

Widont is a twig filter that prevent widow words in paragraphs.  
It replaces the space between the last word(s) in a string with ``&nbsp;``.  
It works in these block tags ``(h1-h6, p, li)``, and also accounts for these potential closing inline elements ``a|span|i|b|em|strong|acronym|caps|sub|sup|abbr|big|small|code|cite|tt``.

## Installation

To install Widont, follow these steps:

1. Download & unzip the file and place the `widont` sub-directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins

Widont works on Craft 2.5.x.

## Usage

```twig
{{ someRichText | widont }}
```

## Parameters (optional)
* **Words** [Number = 1] - *Number of words to force break*
* **Raw** [Bool = true] - *Return raw output via TemplateHelper::getRaw()*

## Examples

The following:

```html
{{ <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> | widont }}
```

output this:

```html
<p>Lorem ipsum dolor sit amet, consectetur adipisicing&nbsp;elit.</p>
```

But you can also control how many words to `force break`:

```html
{{ <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> | widont(2) }}
```

output this:

```html
<p>Lorem ipsum dolor sit amet, consectetur&nbsp;adipisicing&nbsp;elit.</p>
```

## Credit
Widont php implementation taken from [TypogrifyHelper for CakePHP](https://github.com/davethegr8/cakephp-typogrify-helper).  
Spider Web icon by [Muhamad Ulum](https://thenounproject.com/term/spider/228763/) from the [Noun Project](https://thenounproject.com).

## Changelog

### 1.0.0 -- 2016.08.23

* Initial release

Brought to you by [Alexander Bech](http://vaersaagod.no)
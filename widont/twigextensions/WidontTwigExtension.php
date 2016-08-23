<?php
/**
 * Widont plugin for Craft CMS
 *
 * Widont Twig Extension
 *
 * @author    Alexander Bech
 * @copyright Copyright (c) 2016 Alexander Bech
 * @link      vaersaagod.no
 * @package   Widont
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class WidontTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'Widont';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return array(
            'widont' => new \Twig_Filter_Method($this, 'widont'),
        );
    }

    /**
    * @return array
     */
    public function getFunctions()
    {
        return array(
            'widont' => new \Twig_Function_Method($this, 'widont'),
        );
    }

    /**
     * @return string
     */
    private function widont( $text )
    {
      // Taken from https://github.com/habari-extras/typogrify/blob/master/php-typogrify.php
      $widont_finder = "/([^\s])\s+(((<(a|span|i|b|em|strong|acronym|caps|sub|sup|abbr|big|small|code|cite|tt)[^>]*>)*\s*[^\s<>]+)(<\/(a|span|i|b|em|strong|acronym|caps|sub|sup|abbr|big|small|code|cite|tt)>)*[^\s<>]*\s*(<\/(p|h[1-6]|li)>|$))/i";
                      
      return preg_replace($widont_finder, '$1&nbsp;$2', $text);
    }
}
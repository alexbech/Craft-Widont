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
     * Replaces the space between the nth-last words in a string with ``&nbsp;``
     * Works in these block tags ``(h1-h6, p, li)`` and also accounts for 
     * potential closing inline elements ``a, em, strong, span, b, i``
     * 
     * Empty HTMLs shouldn't error
     *
     * @param   $text Text to transform
     * @param   $numberOfWords Number of words to force break
     * @param   $outputRaw If we should output raw or not
     *
     * @return  The string with widows (hopefully) eliminated
     */
    public function widont ( $text = "", $numberOfWords = 1, $outputRaw = true )
    {
      $tags = "a|span|i|b|em|strong|acronym|caps|sub|sup|abbr|big|small|code|cite|tt";

      // Taken from https://github.com/davethegr8/cakephp-typogrify-helper/blob/master/views/helpers/typogrify.php
      // This regex is a beast, tread lightly
      $regex = "/([^\s])\s+(((<($tags)[^>]*>)*\s*[^\s<>]+)(<\/($tags)>)*[^\s<>]*\s*(<\/(p|h[1-6]|li)>|$))/i";
      $string = $text;

      for ($i = 0; $i < $numberOfWords; $i++) {
        $string = preg_replace($regex, '$1&nbsp;$2', $string);
      }

      return $outputRaw ? TemplateHelper::getRaw($string) : $string;
    }
}
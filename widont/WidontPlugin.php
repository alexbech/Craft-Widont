<?php
/**
 * Widont plugin for Craft CMS
 *
 * Twig filter to prevent widow words in paragraphs.
 *
 * @author    Alexander Bech
 * @copyright Copyright (c) 2016 Alexander Bech
 * @link      vaersaagod.no
 * @package   Widont
 * @since     1.0.0
 */

namespace Craft;

class WidontPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Widont');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Twig filter to prevent widow words in paragraphs.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/alexbech/widont/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/alexbech/widont/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Alexander Bech';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'vaersaagod.no';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.widont.twigextensions.WidontTwigExtension');

        return new WidontTwigExtension();
    }
}
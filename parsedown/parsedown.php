<?php

/**
 * Parsedown plugin
 *
 *  @package Morfy
 *  @subpackage Plugins
 *  @author Pavel Belousov / pafnuty
 *  @copyright 2014 - 2015 Romanenko Sergey / Awilum
 *  @version 1.0.0
 *
 */

/**
 * Add to config.php
 * 'parsedown' => array(
 *     'extra'    => true, // Enable parsedownExtra
 *     'autoLink' => true, // Enable automatic convertation url to link
 * ),
 */

require_once PLUGINS_PATH . '/parsedown/Parsedown/Parsedown.php';

if (Morfy::$config['parsedown']['extra']) {
    require_once PLUGINS_PATH . '/parsedown/Parsedown-extra/ParsedownExtra.php';
}

Morfy::factory()->addFilter('content', 'parseMdText', 1);

function parseMdText($content)
{
    $parseDownConfig = Morfy::$config['parsedown'];

    if ($parseDownConfig['extra']) {
        $Parsedown = new ParsedownExtra();
    } else {
        $Parsedown = new Parsedown();
    }

    $Parsedown->setUrlsLinked($parseDownConfig['autoLink']);

    return $Parsedown->text($content);
}

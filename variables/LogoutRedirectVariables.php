<?php
/**
 * @link      https://dukt.net/craft/oauth/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/oauth/docs/license
 */

namespace Craft;

class LogoutRedirectPlugin
{

    public function getPluginSettings()
    {
        $plugin = craft()->plugins->getPlugin('logoutredirect');
        return $plugin->getSettings();
    }
    
}

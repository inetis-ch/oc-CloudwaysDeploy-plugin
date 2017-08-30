<?php namespace Inetis\CloudwaysDeploy;

use Backend;
use System\Classes\SettingsManager;
use System\Classes\PluginBase;

/**
 * CloudwaysDeploy Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Cloudways AutoDeploy',
            'description' => 'WebHook to setup an autodeploy on CloudWay from Github',
            'author'      => 'Inetis',
            'icon'        => 'icon-cloud'
        ];
    }


    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Cloudways AutoDeploy',
                'description' => 'from Github or Bitbucket',
                'category'    => SettingsManager::CATEGORY_SYSTEM,
                'icon'        => 'icon-cloud',
                'class'       => 'Inetis\CloudwaysDeploy\Models\Settings',
                'order'       => 500,
                'keywords'    => 'cloudways github webhook'
            ]
        ];
    }
}

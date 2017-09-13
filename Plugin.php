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
            'description' => 'Automate Git Deployment Using Webhooks on Cloudways',
            'author'      => 'inetis',
            'icon'        => 'icon-cloud',
            'homepage'    => 'https://github.com/inetis-ch/oc-CloudwaysDeploy-plugin'
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

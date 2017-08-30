<?php namespace Inetis\CloudwaysDeploy\Models;

use Model;

/**
 * Model
 *
 * @method static mixed get(string $key, mixed $default = null)
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'inetis_cloudways_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
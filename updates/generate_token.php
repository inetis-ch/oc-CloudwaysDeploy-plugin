<?php namespace Inetis\CloudwaysDeploy\Updates;

use Inetis\CloudwaysDeploy\Models\Settings;
use October\Rain\Database\Updates\Migration;

class InitializeToken extends Migration
{
    public function up()
    {
        if (!Settings::instance()->webhook_token) {
            Settings::set('webhook_token', str_random(32));
        }
    }

    public function down()
    {
        Settings::set('webhook_token', null);
    }
}
<?php namespace Inetis\CloudwaysDeploy\Updates;

use Inetis\CloudwaysDeploy\Models\Settings;
use October\Rain\Database\Updates\Migration;

class InitializeToken extends Migration
{
    public function up()
    {
        if (!Settings::instance()->token) {
            Settings::set('token', str_random(32));
        }
    }

    public function down()
    {
        Settings::set('token', null);
    }
}
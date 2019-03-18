<?php

use Inetis\CloudwaysDeploy\Models\Settings;
use October\Rain\Exception\SystemException;
use October\Rain\Network\Http;

Route::post('inetis/cloudwaysdeploy/{webhook_token}', function ($webhookToken) {

    if ($webhookToken !== Settings::get('webhook_token')) {
        throw new Exception('Wrong token', 403);
    }

    $accessToken = callCloudwaysAPI('/oauth/access_token', null, [
        'email'   => Settings::get('email'),
        'api_key' => Settings::get('api_key')
    ]);

    $gitPullResponse = callCloudWaysAPI('/git/pull', $accessToken->access_token, [
        'server_id'   => Settings::get('server_id'),
        'app_id'      => Settings::get('app_id'),
        'git_url'     => Settings::get('git_url'),
        'branch_name' => Settings::get('branch_name'),
        'deploy_path' => Settings::get('deploy_path'),
    ]);

    return json_encode($gitPullResponse);
});

/**
 * Call the CloudwaysAPI
 *
 * @param       $url
 * @param       $accessToken
 * @param array $post
 *
 * @return mixed
 * @throws SystemException
 */
function callCloudwaysAPI($url, $accessToken, $post = [])
{
    $result = Http::post($url, function ($http) use ($url, $post, $accessToken) {
        $baseURL = Settings::get('api_url');
        $http->setOption(CURLOPT_CUSTOMREQUEST, 'POST');
        $http->setOption(CURLOPT_RETURNTRANSFER, true);
        $http->setOption(CURLOPT_URL, $baseURL . $url);

        if ($accessToken) {
            $http->setOption(CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $accessToken]);
        }

        if (count($post)) {
            $http->data($post);
        }
    });

    if ($result->code != '200') {
        throw new SystemException('An error occurred code: ' . $result->code . ' output: ' . substr($result->body, 0, 10000),$result->code);
    }

    return json_decode($result->body);
}
<?php

if ( ! function_exists( 'gh_log' ) ) {
	require_once __DIR__ . '/php.php';
}

require_once __DIR__ . '/php/vendor/autoload.php';

use Milo\Github\Api;
use Milo\Github\OAuth\Token;

gh_validate_env( 'GITHUB_TOKEN', 'Set the GITHUB_TOKEN env variable' );

$github_api = new Api();
$github_api->setToken( new Token( gh_env( 'GITHUB_TOKEN' ) ) );

$GLOBALS['github_api'] = $github_api;
<?php
global $GITHUB_EVENT;

require_once __DIR__ . '/php/util.php';
require_once __DIR__ . '/php/logger.php';
require_once __DIR__ . '/php/log-functions.php';
require_once __DIR__ . '/php/inputvar.php';
require_once __DIR__ . '/php/env.php';
require_once __DIR__ . '/php/general-functions.php';

define( 'GH_WORKSPACE', gh_env( 'GITHUB_WORKSPACE' ) . '/' );
define( 'GH_REF_BRANCH', trim( str_replace( 'refs/heads/', '', gh_env( 'GITHUB_REF' ) ) ) );

$gh_event_path_file = gh_env( 'GITHUB_EVENT_PATH' );
$GITHUB_EVENT       = ( file_exists( $gh_event_path_file ) ) ? json_decode( $gh_event_path_file, true ) : false;
$GITHUB_EVENT       = ( ! is_array( $GITHUB_EVENT ) ) ? array() : $GITHUB_EVENT;
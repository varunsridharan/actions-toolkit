<?php

function gh_log( $content = '' ) {
	echo $content . PHP_EOL;
}

function gh_log_group_start( $content ) {
	gh_log( "###[group]$content" );
}

function gh_log_group_end() {
	gh_log( '###[endgroup]' );
}

function gh_log_yellow( $content ) {
	gh_log( "###[warning]$content" );
}

function gh_log_warning( $content ) {
	gh_log_yellow( "⚠️  $content" );
}

function gh_log_red( $content ) {
	gh_log( "###[error]$content" );
}

function gh_log_error( $content ) {
	gh_log_red( "🛑️  $content" );
}

function gh_log_debug( $content ) {
	gh_log( "::debug::$content" );
}
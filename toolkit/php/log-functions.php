<?php

function gh_log( $content ) {
	echo $content;
}

function gh_log_group_start( $content ) {
	echo "###[group]$content";
}

function gh_log_group_end() {
	echo '###[endgroup]';
}

function gh_log_yellow( $content ) {
	echo "###[warning]$content";
}

function gh_log_warning( $content ) {
	gh_log_yellow( "⚠️  $content" );
}

function gh_log_red( $content ) {
	echo "###[error]$content";
}

function gh_log_error( $content ) {
	gh_log_red( "🛑️  $content" );
}

function gh_log_debug( $content ) {
	echo "::debug::$content";
}
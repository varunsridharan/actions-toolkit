<?php

/**
 * Checks Input Variable's Value
 *
 * @param      $key
 * @param null $default
 *
 * @return mixed|null
 */
function gh_input( $key, $default = null ) {
	$key = sprintf( 'INPUT_%s', $key );
	if ( isset( $_ENV[ $key ] ) ) {
		return $_ENV[ $key ];
	}

	return $default;
}

/**
 * Validates Input Value.
 *
 * @param      $key
 * @param bool $custom_message
 *
 * @return mixed|null
 */
function gh_validate_input( $key, $custom_message = false ) {
	if ( null === gh_input( $key ) ) {
		$custom_message = ( false === $custom_message ) ? '%s Not Found. Please Set The Input Value using WITH in workflow file' : $custom_message;
		$custom_message = sprintf( '%s', $custom_message );
		gh_log_red( '🚨 ' . $custom_message );
		die();
	}
	return gh_input( $key );
}


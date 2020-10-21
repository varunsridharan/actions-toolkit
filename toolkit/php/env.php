<?php

function gh_env( $key, $default = null ) {
	if ( isset( $_ENV[ $key ] ) ) {
		return $_ENV[ $key ];
	}
	return $default;
}

function gh_validate_env( $key, $custom_message ) {
	if ( null === gh_env( $key ) ) {
		$custom_message = ( false === $custom_message ) ? '%s Not Found. Please Set It As ENV Variable' : $custom_message;
		$custom_message = sprintf( $custom_message, $key );
		$custom_message = '🚩  ' . $custom_message;
		gh_log_red( $custom_message );
		exit;
	}
	return gh_env( $key );
}

function gh_set_env_multiline( $key, $value, $silent = false ) {
	echo 'echo "' . $key . '<<EOF" >> $GITHUB_ENV';
	echo 'echo "' . addslashes( $value ) . '" >> $GITHUB_ENV';
	echo 'echo "EOF" >> $GITHUB_ENV';
	if ( ! $silent ) {
		gh_log( "✔️ ENV  : ${key}  =>  ${value}" );
	}

}

function gh_set_env( $key, $value, $silent = false ) {
	echo 'echo "' . $key . '=' . $value . '" >> $GITHUB_ENV';
	if ( ! $silent ) {
		gh_log( "✔️ ENV  : ${key}  =>  ${value}" );
	}

}

function gh_set_env_silent( $key, $value ) {
	gh_set_env( $key, $value, true );
}

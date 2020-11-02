<?php
function untrailingslashit( $string ) {
	return rtrim( $string, '/\\' );
}

function trailingslashit( $string ) {
	return untrailingslashit( $string ) . '/';
}

function fix_path( $path ) {
	$path = trim( $path, ' ' );

	# Search For Path That Starts With /../ And Removes First /
	if ( substr( $path, 0, strlen( '/../' ) ) === '/../' ) {
		$path = ltrim( $path, '/' );
	}

	# Search For Path That Starts With /./ And Removes First /./
	if ( substr( $path, 0, strlen( '/./' ) ) === '/./' ) {
		$path = ltrim( $path, '/./' );
	}

	# Search For Path That Starts With ./ And Removes First ./
	if ( substr( $path, 0, strlen( './' ) ) === './' ) {
		$path = ltrim( $path, './' );
	}

	# Search For Path That Starts With / And Removes First /
	if ( substr( $path, 0, strlen( '/' ) ) === '/' ) {
		$path = ltrim( $path, '/' );
	}

	return $path;
}

function save_file( $save_to, $content ) {
	$save_to = GH_WORKSPACE . fix_path( $save_to );
	file_put_contents( $save_to, $content );
	return $save_to;
}

function get_file( $location ) {
	$location = GH_WORKSPACE . fix_path( $location );
	return ( file_exists( $location ) ) ? file_get_contents( $location ) : '';
}

function validate_save_path( $dest_path, $default_filename = '' ) {
	if ( empty( pathinfo( $dest_path, PATHINFO_EXTENSION ) ) ) {
		$dest_path = trailingslashit( $dest_path ) . untrailingslashit( fix_path( $default_filename ) );
	}

	$base_dirname = dirname( $dest_path );

	if ( ! file_exists( GH_WORKSPACE . $base_dirname ) && ! is_dir( GH_WORKSPACE . $base_dirname ) ) {
		@mkdir( GH_WORKSPACE . $base_dirname, 0777, true );
	}
	return $dest_path;
}
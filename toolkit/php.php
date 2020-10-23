<?php

require_once __DIR__ . '/php/logger.php';
require_once __DIR__ . '/php/log-functions.php';
require_once __DIR__ . '/php/inputvar.php';
require_once __DIR__ . '/php/env.php';

function gh_gitconfig( $username = 'Github Action Bot', $email = 'githubactionbot@gmail.com' ) {
	var_dump( shell_exec( "gitconfig ${username} ${email}" ) );
	print_r( shell_exec( "gitconfig ${username} ${email}" ) );
	echo shell_exec( "gitconfig ${username} ${email}" );
}
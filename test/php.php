<?php
include_once '/gh-toolkit/php.php';

gh_log( 'Sample Log In Github Actions' );
gh_log_group_start( 'Group Name' );
gh_log( 'Log Line 1' );
gh_log( 'Log Line 2' );
gh_log( 'Log Line 3' );
gh_log_group_end();

# Github Action Warning Log
gh_log_yellow( 'This Will Be Displayed As Warning In Github Actions Log' );

# Github Action Warning Log With Emoji
gh_log_warning( 'This Will Be Displayed With A Warning Emoji' );

# Github Action Error Log
gh_log_red( 'This Will Be Displayed As Error In Github Actions Log' );

# Github Action Error Log With Emoji
gh_log_error( 'This Will Be Displayed With A Error Emoji' );

# Github Actions Debug Log
gh_log_debug( 'This Will Be Displayed As Debug Log in Github Actions Log If Debug Enabled' );

// ::log method usage
// -------------------------------------------------------
GH_LOG::log( 'Im Red!', 'red' );
GH_LOG::log( 'Im Blue on White!', 'white', true, 'blue' );
GH_LOG::log( 'I dont have an EOF', false );
GH_LOG::log( "\tThis is where I come in.", 'light_green' );
GH_LOG::log( 'You can swap my variables', 'black', 'yellow' );
GH_LOG::log( str_repeat( '-', 60 ) );

GH_LOG::blue( 'Blue Text' );
GH_LOG::black( 'Black Text on Magenta Background', 'magenta' );
GH_LOG::red( 'Im supposed to be red, but Im reversed!', 'reverse' );
GH_LOG::red( 'I have an underline', 'underline' );
GH_LOG::blue( 'I should be blue on light gray but Im reversed too.', 'light_gray', 'reverse' );

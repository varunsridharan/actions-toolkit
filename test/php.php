<?php
#include_once '/gh-toolkit/php.php';
include_once '/gh-toolkit/gh-api.php';

global $github_api;
$data = $github_api->decode( $github_api->get( 'repos/' . gh_env( 'GITHUB_REPOSITORY' ) ) );

gh_gitconfig();

gh_gitconfig( 'AlpineOS', 'alpine@gmail.com' );

gh_log_group_start( 'Github API' );
gh_log( print_r( $data, true ) );
gh_log_group_end();

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


GH_LOG::Log( 'My Background Color Will Be {black}', 'normal', 'black' );
GH_LOG::Log( 'My Background Color Will Be {red}', 'normal', 'red' );
GH_LOG::Log( 'My Background Color Will Be {green}', 'normal', 'green' );
GH_LOG::Log( 'My Background Color Will Be {yellow}', 'normal', 'yellow' );
GH_LOG::Log( 'My Background Color Will Be {blue}', 'normal', 'blue' );
GH_LOG::Log( 'My Background Color Will Be {magenta}', 'normal', 'magenta' );
GH_LOG::Log( 'My Background Color Will Be {cyan}', 'normal', 'cyan' );
GH_LOG::Log( 'My Background Color Will Be {light_gray}', 'normal', 'light_gray' );
GH_LOG::Log( 'My Text Color Will Be {bold}', 'bold' );
GH_LOG::Log( 'My Text Color Will Be {dim}', 'dim' );
GH_LOG::Log( 'My Text Color Will Be {black}', 'black' );
GH_LOG::Log( 'My Text Color Will Be {dark_gray}', 'dark_gray' );
GH_LOG::Log( 'My Text Color Will Be {blue}', 'blue' );
GH_LOG::Log( 'My Text Color Will Be {light_blue}', 'light_blue' );
GH_LOG::Log( 'My Text Color Will Be {green}', 'green' );
GH_LOG::Log( 'My Text Color Will Be {light_green}', 'light_green' );
GH_LOG::Log( 'My Text Color Will Be {cyan}', 'cyan' );
GH_LOG::Log( 'My Text Color Will Be {light_cyan}', 'light_cyan' );
GH_LOG::Log( 'My Text Color Will Be {red}', 'red' );
GH_LOG::Log( 'My Text Color Will Be {light_red}', 'light_red' );
GH_LOG::Log( 'My Text Color Will Be {purple}', 'purple' );
GH_LOG::Log( 'My Text Color Will Be {light_purple}', 'light_purple' );
GH_LOG::Log( 'My Text Color Will Be {brown}', 'brown' );
GH_LOG::Log( 'My Text Color Will Be {yellow}', 'yellow' );
GH_LOG::Log( 'My Text Color Will Be {light_gray}', 'light_gray' );
GH_LOG::Log( 'My Text Color Will Be {white}', 'white' );
GH_LOG::Log( 'My Text Color Will Be {normal}', 'normal' );
GH_LOG::Log( 'This Text Will Be [underline]', 'normal', false, 'underline' );
GH_LOG::Log( 'This Text Will Be [blink]', 'normal', false, 'blink' );
GH_LOG::Log( 'This Text Will Be [reverse]', 'normal', false, 'reverse' );
GH_LOG::Log( 'This Text Will Be [hidden]', 'normal', false, 'hidden' );

# Get The ENV Variable's Value
gh_log( gh_input( 'VALUE1' ) );
gh_log( gh_input( 'VALUE2' ) );
gh_log( gh_input( 'VALUE3' ) );
gh_log( gh_input( 'VALUE4', 'DEFAULT_VALUE' ) );
#gh_validate_input( 'VALUE5', 'Sorry Can\'t Process VALUE5 Input Is Required' );
#gh_validate_input( 'VALUE6' );

# Sets A New ENV Variable And Logs A Success Message
gh_set_env( "ENV_VAR_NAME", "ENV_VAR_CONTENT" );
gh_set_env( "ENV_VAR_NAME2", "ENV_VAR_CONTENT" );

# Sets A New ENV Variable And No Log Will Be Generated
gh_set_env_silent( "ENV_VAR_NAME3", "Custom Content Here" );

# Sets A New ENV Variable Which Will have Multiple Lines Of String
gh_set_env_multiline( "VARIABLE_NAME", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum." );

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

print_r( gh_validate_input( 'VALUE1' ) );
print_r( gh_validate_input( 'VALUE2' ) );
print_r( gh_validate_input( 'VALUE3' ) );
print_r( gh_validate_input( 'VALUE32', 'Important Input Variable Not Found !' ) );
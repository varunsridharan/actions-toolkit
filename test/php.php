<?php
include_once '/gh-toolkit/php.php';

// ::log method usage
// -------------------------------------------------------
GH_LOG::log( 'Im Red!', 'red' );
GH_LOG::log( 'Im Blue on White!', 'white', true, 'blue' );

GH_LOG::log( 'I dont have an EOF', false );
GH_LOG::log( "\tThis is where I come in.", 'light_green' );
GH_LOG::log( 'You can swap my variables', 'black', 'yellow' );
GH_LOG::log( str_repeat( '-', 60 ) );

// Direct usage
// -------------------------------------------------------
echo GH_LOG::blue( 'Blue Text' ) . "\n";
echo GH_LOG::black( 'Black Text on Magenta Background', 'magenta' ) . "\n";
echo GH_LOG::red( 'Im supposed to be red, but Im reversed!', 'reverse' ) . "\n";
echo GH_LOG::red( 'I have an underline', 'underline' ) . "\n";
echo GH_LOG::blue( 'I should be blue on light gray but Im reversed too.', 'light_gray', 'reverse' ) . "\n";

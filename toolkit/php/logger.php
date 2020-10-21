<?php

/**
 * PHP Colored CLI
 * Used to log strings with custom colors to console using php
 *
 * Copyright (C) 2013 Sallar Kaboli <sallar.kaboli@gmail.com>
 * MIT Liencesed
 * http://opensource.org/licenses/MIT
 *
 * Original colored CLI output script:
 * (C) Jesse Donat https://github.com/donatj
 */
class GH_LOG {

	static $foreground_colors = array(
		'bold'         => '1',
		'dim'          => '2',
		'black'        => '0;30',
		'dark_gray'    => '1;30',
		'blue'         => '0;34',
		'light_blue'   => '1;34',
		'green'        => '0;32',
		'light_green'  => '1;32',
		'cyan'         => '0;36',
		'light_cyan'   => '1;36',
		'red'          => '0;31',
		'light_red'    => '1;31',
		'purple'       => '0;35',
		'light_purple' => '1;35',
		'brown'        => '0;33',
		'yellow'       => '1;33',
		'light_gray'   => '0;37',
		'white'        => '1;37',
		'normal'       => '0;39',
	);

	static $background_colors = array(
		'black'      => '40',
		'red'        => '41',
		'green'      => '42',
		'yellow'     => '43',
		'blue'       => '44',
		'magenta'    => '45',
		'cyan'       => '46',
		'light_gray' => '47',
	);

	static $options = array(
		'underline' => '4',
		'blink'     => '5',
		'reverse'   => '7',
		'hidden'    => '8',
	);

	static $eof = "\n";

	/**
	 * Logs a string to console.
	 *
	 * @param string  $str Input String
	 * @param string  $color Text Color
	 * @param  [type]  $background Background Color
	 */
	public static function log( $str = '', $color = 'normal', $background_color = null ) {
		gh_log( self::$color( $str, $background_color ) );
	}

	/**
	 * Anything below this point (and its related variables):
	 * Colored CLI Output is: (C) Jesse Donat
	 * https://gist.github.com/donatj/1315354
	 * -------------------------------------------------------------
	 */

	/**
	 * Catches static calls (Wildcard)
	 *
	 * @param string $foreground_color Text Color
	 * @param array  $args Options
	 *
	 * @return string                   Colored string
	 */
	public static function __callStatic( $foreground_color, $args ) {
		$string         = $args[0];
		$colored_string = '';

		if ( isset( self::$foreground_colors[ $foreground_color ] ) ) {
			$colored_string .= "\033[" . self::$foreground_colors[ $foreground_color ] . 'm';
		} else {
			die( $foreground_color . ' not a valid color' );
		}

		array_shift( $args );

		foreach ( $args as $option ) {
			if ( isset( self::$background_colors[ $option ] ) ) {
				$colored_string .= "\033[" . self::$background_colors[ $option ] . 'm';
			} elseif ( isset( self::$options[ $option ] ) ) {
				$colored_string .= "\033[" . self::$options[ $option ] . 'm';
			}
		}

		$colored_string .= $string . "\033[0m";
		return $colored_string;
	}
}
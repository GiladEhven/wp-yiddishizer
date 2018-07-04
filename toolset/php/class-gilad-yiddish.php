<?php

	namespace Ehven\Gilad\WordPress\Plugins\WpYiddishizer;

	if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	if ( ! class_exists( __NAMESPACE__ . 'Gilad_Yiddish' ) ) {

		class Gilad_Yiddish {

            public static $object_counter = 0;

			public function __construct() {

                self::$object_counter++;

			}



		}

	}

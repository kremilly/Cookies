<?php

	/**
	 * 
	 * @author TSEmily
	 * @version 1.0.0
	 * @license MIT
	 * @package TSEmily\Cookies
	 * @link https://github.com/thesilvaemily/Cookies
	 * 
	*/

	namespace TSEmily;
	use TSEmily;

	abstract class RegexCookies {

		public static array $cookies  	=	[
			'int'						=>	'/[^0-9]/',
			'float'						=>	'/[^0-9.]/',
			'string'					=>	'/[^a-zA-Z]/',
			'hex'						=>	'/[^a-f0-9]/',
			'color'						=>	'/[^a-f0-9#]/',
			'string_int'				=>	'/[^a-zA-Z0-9]/',
			'default'					=>	'/[^a-zA-Z0-9]/',
			'string_slug'				=>	'/[^a-zA-Z0-9-_]/',
			'hashtag'					=>	'/[^a-zA-Z0-9_#]/',
			'base64'					=>	'/[^a-zA-Z0-9+\/]/',
			'phone'						=>	'/[^0-9\+\-\(\) ]/',
			'hash'						=>	'/[^a-f0-9]{8,128}/',
			'email'						=>	'/[^a-zA-Z0-9@._-]/',
			'string_url'				=>	'/[^a-zA-Z0-9-_\/]/',
			'string_url_slug'			=>	'/[^a-zA-Z0-9-_\/]/',
			'url'						=>	'/[^a-zA-Z0-9-_:/?#=&;]/',
			'string_int_symbols'		=>	'/[^a-zA-Z0-9-_#@=+&.;:%]/',
			'json-array'				=>	'/[^a-zA-Z0-9\{\}\[\]\:\,]/',
			'html'						=>	'/[^a-zA-Z0-9<>\/\#\[\]\{\}]/',
			'json'						=>	'/[^a-zA-Z0-9\{\}\[\]\:\,\s]/',
		];

	}
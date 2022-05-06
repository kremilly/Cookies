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
	
	require_once 'class.regex-cookies.php';

	class Cookies extends RegexCookies {

		/*
		*
		* @param string $name
		* @return boolean
		*
		*/
		public static function has(string $name): bool {
			return isset(
				$_COOKIE[
					self::_name($name)
				]
			);
		}

		/*
		*
		* @param array $data
		* @return void
		*
		*/
		public static function create(array $data): void {
			if (@$data['opt-pattern']) {
				$data['value']	=	preg_replace(
					parent::$cookies[
						@$data['opt-pattern']
					], '', $data['value']
				);
			}

			setcookie($data['name'], $data['value'], [
				'expires' 	=>	$data['expires'] ?? 0,
				'path' 		=>	$data['path'] ?? '/',
				'domain' 	=>	$data['domain'] ?? '',
				'secure' 	=>	$data['secure'] ?? false,
				'httpOnly' 	=>	$data['httpOnly'] ?? false,
				'sameSite' 	=>	$data['sameSite'] ?? 'None',
			]);
		}


		/*
		*
		* @param string $name
		* @return string
		*
		*/
		public static function get(string $name): string {
			return $_COOKIE[
				self::_name($name)
			];
		}


		/*
		*
		* @param string $name
		* @return void
		*
		*/
		public static function delete(string $name): void {
			self::create([
				'value'		=>	null,
				'expire'	=>	time() - 3600,
				'name'		=>	self::_name($name),
			]);
		}

	}
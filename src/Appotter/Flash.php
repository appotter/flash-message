<?php
namespace Appotter;

/**
 * Flashdata library
 *
 * @link	 https://github.com/appotter/flash-message
 * @author	 Joel Vardy <info@joelvardy.com>
 * @reformer Phitsanu AP Chuamuangphan <ap.phitsanu@gmail.com>
 */
class Flash
{
	// TODO: Allow this to be set
	protected static $session_name = 'flash';

	/**
	 * Get/set flash data
	 *
	 * @return	mixed|void
	 */
	public static function data($payload = null)
	{
		// Overwrite payload
		if ($payload) {

			$_SESSION[self::$session_name]['data'] = $payload;

			return;
		}

		// Read data
		$data = false;

		if (isset($_SESSION[self::$session_name]['data'])) {
			$data = $_SESSION[self::$session_name]['data'];
		}

		unset($_SESSION[self::$session_name]['data']);

		return $data;
	}

	/**
	 * Get/set flash message
	 *
	 * @return	array|void
	 */
	public static function message($type = null, $message = null)
	{
		// Add new message
		if ($type and $message) {

			$_SESSION[self::$session_name]['messages'][$type][] = $message;

			return;
		}

		// Read messages
		$messages = array();

		if (isset($_SESSION[self::$session_name]['messages'])) {
			$messages = $_SESSION[self::$session_name]['messages'];
		}

		unset($_SESSION[self::$session_name]['messages']);

		return $messages;
	}

}
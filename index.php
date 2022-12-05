<?php
Artisan::command('pldt {code}', function ($code) {
	$table = [
		'0' => 'f',
		'1' => 'e',
		'2' => 'd',
		'3' => 'c',
		'4' => 'b',
		'5' => 'a',
		'6' => '9',
		'7' => '8',
		'8' => '7',
		'9' => '6',
		'a' => '5',
		'b' => '4',
		'c' => '3',
		'd' => '2',
		'e' => '1',
		'f' => '0',
	];

	$code = str_split($code);
	$code = array_map(function ($letter) use ($table) {
		return $table[$letter];
	}, $code);

	$code = implode('', $code);

	$this->comment('wlan'.$code);
})->purpose('Display PLDT password');
?>

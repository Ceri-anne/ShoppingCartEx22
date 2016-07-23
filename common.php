<?php

//Added a comment
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/App/cart_app.php';
include 'lib/Cart/View/cart_view.php';
include 'lib/Cart/Auth/cart_auth.php';
include 'lib/Cart/Upload/cart_upload.php';

use function Cart\Db\load_cart;

const DATABASE_EXTENSION = '.db';
const DATABASE_NAME = 'cart';

// CART "DATABASE"
$users = ['sholmes' => [
			'id' => 1001,
			'email' => 'sherlock@example.com',
			'postcode' => 'AA10 1AA',
			'password' => password_hash('test', PASSWORD_DEFAULT)
		],
		'watson' => [
			'id' => 1002,
			'email' => 'drwatson`@example.com',
			'postcode' => 'BB10 A1B',
			'password' => password_hash('test', PASSWORD_DEFAULT)
		]
	];

$camera = [
	'name' => 'Sony A7S',
	'price' => 1700
];

$lens = [
	'name' => 'Samyang 35mm',
	'price' => 400
];

$cart = [
	'user' => 'sholmes',
	'items' => [$camera, $lens]
];

set_error_handler(function ($errorType, $errorMessage) {
 	echo \Cart\View\display('error', ['message' => $errorMessage]);
});

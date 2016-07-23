<?php
namespace Cart\App;

use function Cart\Db\create_item, Cart\Db\read_item_id,
			 Cart\Db\save_cart;


function add_item(&$cart, $item) {

	$new_id = create_item($cart, $item);

	save_cart($cart);

	return ['new_item' => \Cart\Db\read_item_name($cart, $item['name'])];
}


function get_item($cart, $id) {
	return ['new_item' => read_item_id($cart, $id)];
}


function validate_cart(&$cart) {
	foreach($users as $username => $user) {
		if(!postcode_valid($user['postcode'])) {
			delete_user($users, $username);
		}
	}
}

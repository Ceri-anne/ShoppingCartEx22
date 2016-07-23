<?php
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/App/cart_app.php';
include 'lib/Cart/View/cart_view.php';

use function Cart\View\display;
?>


<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Shopping Cart</h1>

<?= display('user', ['heading' => 'User', 'users' => $users, 'cart' => $cart]); ?>
<?= display('items', ['heading' => 'Cart', 'cart' => $cart]); ?>
<?= display('users', ['heading' => 'All Users', 'users' => $users]); ?>

<?php if($_SERVER['REQUEST_METHOD'] == 'GET'): ?>
	<?= display('newitem');?>
<?php else: ?>

<?php echo display('item', \Cart\App\add_item($cart, $_POST) + ['heading' => 'New Item']); ?>

<?php endif; ?>

</body>
</html>

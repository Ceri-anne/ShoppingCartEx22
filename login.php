<?php
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/Auth/cart_auth.php';
include 'lib/Cart/View/cart_view.php';

?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	Cart\Auth\login($users, $_POST['username'], $_POST['password']);
}
?>
 
 
<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Shopping Cart</h1>

<?php echo Cart\View\display('loginform'); ?>

</body>
</html>

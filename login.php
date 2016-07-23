<?php
include 'common.php';
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

<?php
include 'common.php';


\Cart\Auth\require_login();

$view_vars = \Cart\App\get_item($cart, $_GET['id'] ?? 0);
?>


<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Shopping Cart</h1>

<?php echo \Cart\View\display('item', $view_vars); ?>

</body>
</html>

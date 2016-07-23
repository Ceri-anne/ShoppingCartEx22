<?php
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/Upload/cart_upload.php';
include 'lib/Cart/View/cart_view.php';

?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {
	Cart\Upload\upload_file();
}
?>


<!doctype html>
<html>
<head><title>Shopping Cart</title></head>
<body>

<h1>Upload</h1>

<?php echo Cart\View\display('uploadform'); ?>

</body>
</html>

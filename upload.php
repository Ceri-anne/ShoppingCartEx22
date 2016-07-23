<?php
include 'common.php';

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

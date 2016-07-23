<?php

/*

	create common.php 
		include on all pages (index.php ... upload.php etc.)
		move cart_db non-defs to common.php -- 
			Ex: this is known as a bootstrap
			
			
	write a custom error handler that logs errors locally AND
		displays pretty *user* errors
			do not catch any of PHP errors

			
			die() -> trigger_error()
				cart_upload AND cart_auth
			
	
*/


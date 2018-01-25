<?php
session_destroy();
session_write_close();
setcookie(username, "", time() + (86400), "/");
			header("Location: index.php");
?>
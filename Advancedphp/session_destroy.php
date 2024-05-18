<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo  "All session variable ara now removed , and the session is destroyed."
?>

</body>
</html>
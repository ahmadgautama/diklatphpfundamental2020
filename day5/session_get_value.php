<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
//echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

?>

</body>
</html>
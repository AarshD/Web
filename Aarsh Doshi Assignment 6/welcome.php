<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to PHP</title>
        <meta charset="utf-8">
</head>
<body>

<?php

   if(isset($_GET["firstname"]) && isset($_GET["lastname"])){
        echo "Hello " . $_GET["firstname"] . " " . $_GET["lastname"];
   } elseif (isset($_GET["firstname"]) && empty($_GET["lastname"])) {
        echo "Hello " . $_GET["firstname"];
   } elseif (empty($_GET["firstname"]) && isset($_GET["lastname"])) {
        echo "Hello " . $_GET["lastname"];
   }else {
        echo "Hello";
   }

?>

<br><br>    
<form action="welcome.php" method="GET">
    First Name: <input type="text" name="firstname" ><br><br>
    Last Name: <input type="text" name="lastname" ><br><br>
    <input type="submit">
    </form>
</body>
</html>
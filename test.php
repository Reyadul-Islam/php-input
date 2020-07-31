
<!DOCTYPE html>
<html>
<body>

<?php
header("Access-Control-Allow-Origin:");
$data =file_get_contents("test.txt");
echo $data."From Server";
?>
  
 </body>
</html>



<?php

define('SQL_HOST','localhost');
define('SQL_USER','root');
define('SQL_PASS','');
define('SQL_DB','test');
define('SQL_PORT','3306');
$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB,SQL_PORT);
if($conn->connect_error){
echo'sorry could not connect to database ';
die;
}
else
{
   // echo'sussesfully';
}

?>
<?php

include 'database.php';

 if($_POST['id']){
    $id = $_POST['id'];


if (!empty($id))
{

$operation = mysql_query("delete from address where id ='$id'") or die (mysql_error($connect));

echo '1';

}
 
else

{

echo '0';

}

 }
  ?>
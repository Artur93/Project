<?php

include 'database.php';

 if($_POST['firstname']){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country= $_POST['country']; 
    $city= $_POST['city'];
    $address= $_POST['address'];
    $telephone= $_POST['telephone'];


if (!empty($firstname) || !empty($lastname) || !empty($country) || !empty($city) || !empty($address) || !empty($telephone))
{

$operation = mysql_query("INSERT INTO address (firstname, lastname, country,city,address,telephone) VALUES ( '$firstname','$lastname','$country','$city','$address','$telephone') ") or die (mysql_error($connect));

$mysql_last = mysql_query("select * from address  order by id desc") or die (mysql_error($connect));
$last_id = mysql_fetch_row($mysql_last);

echo $last_id[0];

}
 
else

{

echo '0';

}

 }
  ?>

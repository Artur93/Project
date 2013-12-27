<?php
include 'database.php';
?>

<html>
<head>
<meta charset="utf-8">
<style type="text/css">
body{
	width:100%;
	height:100%;
	padding:0;
	margin:0;
}

.div{
           border-style: solid;
           border-color: black;
           background: #dfefff; 
           padding: 0px 10px;
           margin: 10px auto;
           font-style: italic;
           font-size: 30px;
		   width:500px;
		   height:auto;
		   overflow:hidden;		   
}

.table{
	width:500px;
	height:auto;
	border:1px solid black;
	margin:0 auto;
}

.table th{
	border-bottom:1px solid grey;
}

.append{
	width:500px;
}

</style>

<SCRIPT LANGUAGE="javascript" TYPE="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<SCRIPT LANGUAGE="javascript" TYPE="text/javascript" src="main.js"></script>

</head>
<body>


<table class="div">
	<tr><td>First Name:</td><td><input name="firstname" type="text"  id="fname"/></td></tr>
	<tr><td>Last Name:</td><td><input name="lastname" type="text" id="lname"/></td></tr>
	<tr><td>Country:</td><td><input name="country" type="text" id="cnt"/></td></tr>
	<tr><td>City:</td><td><input name="city" type="text" id="ct"/></td></tr>
	<tr><td>Address:</td><td><input name="addres" type="text" id="adr"/></td></tr>
	<tr><td>Telephone:</td><td><input name="telephone" type="text" id="tel"/></td></tr>
	<tr><td colspan='2' align='center'><input type="submit" value="Submit" name="button" class="form_submit"></td></tr>
</table>



<table  class="table">
<tr>
<th>First name</th>
<th>Last name</th>
<th>Country</th>
<th>City</th>
<th>Address</th>
<th>Telephone</th>
</tr>

<tr>
	<td colspan="6">
		<table class="append">
		</table>
	</td>
</tr>

<?php $mysql_bazis_seleqti=mysql_query("select * from address");
		while($mysql_gamotana = mysql_fetch_row($mysql_bazis_seleqti)){
?>
<tr>
	<?php echo '<td>'.$mysql_gamotana[0].'</td>'; ?>
	<?php echo '<td>'.$mysql_gamotana[1].'</td>'; ?>
	<?php echo '<td>'.$mysql_gamotana[2].'</td>'; ?>
	<?php echo '<td>'.$mysql_gamotana[3].'</td>'; ?>
	<?php echo '<td>'.$mysql_gamotana[4].'</td>'; ?>
	<?php echo '<td>'.$mysql_gamotana[5].'</td>'; ?>
</tr>
<?php	}	?>


</table>
</body>
</html>
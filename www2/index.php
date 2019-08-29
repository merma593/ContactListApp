<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN"><!DOCTYPE html>
<html>
  <head>
    <title>Contact Database</title>
    <meta charset=utf-8>
  </head>
  <body>
    <header>
      <h1>Contact Database</h1>
      <nav>
	<div id ="menu"><a href="http://192.168.34.11"><h2>Enter Details</h2></a></div>
	<div id ="menu"><h2>Search Contacts</h2></a></div>
</nav> 


<table border="1">
  <tr><th>Name</th><th>NumberPaper name</th></tr>

  <?php
   
   $db_host   = '192.168.34.13';
   $db_name   = 'contactdb';
   $db_user   = 'dbuser';
   $db_passwd = 'mypassword';

   $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

   $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

   $q = $pdo->query("SELECT * FROM contactInfo");

  while($row = $q->fetch()){
  echo "<tr><td>".$row["firstname"]."</td><td>".$row["phonenum"]."</td></tr>\n";
  }

  ?>
</table>



</body>
</html>

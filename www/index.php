
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
  <head>
    <title>Contact Database</title>
    <meta charset=utf-8>
  </head>
  <body>
    <header>
      <h1>Contact Database</h1>
      <nav>
	<div id ="menu"><h2>Enter Details</h2></div>
	<div id ="menu"><h2>Contact Information</h2></div>
    <div id ="menu"><a href="http://192.168.34.12"><h2>Contact List</h2></a></div>
      </nav> 
        
        
        

      <form action="index.php" method="post">
	<fieldset>
	  <legend>Enter Personal Information:</legend>
	  First name:<br>
	  <input type="text" name="firstname" ><br>
	  Last name:<br>
	  <input type="text" name="lastname" ><br>
	  Phone Number:<br>
	  <input type="text" name="phonenum" ><br>
	  Email Address:<br>
	  <input type="text" name="email"><br><br>
	  <input type="submit" value="Submit" name="submit">
	</fieldset>
      </form>
   
<?php
    if(isset($_POST['submit'])){
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    $db_host = '192.168.34.13';
    $db_name = 'contactdb';
    $db_user = 'dbuser';
    $db_passwd = 'mypassword';
    $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
    try{
        $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sqlquery = "INSERT INTO contactInfo (firstname, lastname, phonenum, email)
VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["phonenum"]."','".$_POST["email"]."')";
        if ($pdo->query($sqlquery)) {
            echo 'Table updated!';
        }

        
        
    }
    catch(PDOException $error){
        echo "Connection error " . $error->getMessage();
        }
    }

?>  
    

<?php
define('DB_DSN','mysql:dbname=abdikaf1_web');
define('DB_USERNAME','abdikaf1_advise');
define('DB_PASSWORD','xI[F3X&Y=9?_ ');


  
        try {
            //Instantiate a PDO database object
            $this->_dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "Yay!";
        }
        catch (PDOException $e) {
            echo "Error connecting to DB " . $e->getMessage();
        }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
   
  </head>
  
  <body>



    <h1>class planner</h1>
    <include href="views/table.html"></include>
    
    
	<!-- <script src="index.js"></script> -->
  </body>
</html>
<h1>Random Token :</h1>

<?php

$random = substr(md5(mt_rand()), 0, 6);
echo '<span style="font-size: 50px;"> ' . $random.  '</span>';




define('DB_DSN','mysql:dbname=abdikaf1_web;host=abdikafi.greenriverdev.com');
define('DB_USERNAME','abdikaf1_abdikaf');
define('DB_PASSWORD','N{Bca-Oqw21h');

        try {
            //Instantiate a PDO database object
            $dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "Yay!";
        }
        catch (PDOException $e) {
             echo "Error connecting to DB " . $e->getMessage();
           /// /echo $e->getMessage();  //for debugging only
            die ("NOT CONNECTED.");
        }
// $servername = "localhost";
// $username = "abdikaf1_abdikaf";
// $password = "N{Bca-Oqw21h";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }










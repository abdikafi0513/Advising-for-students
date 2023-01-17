
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

<?php

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advising Website</title>
   
  </head>
  
  <body>

    <h1>class planner</h1>
    
    <include href="views/table.html"></include>
    
    <h1>Page Token :</h1><br>
  </body>
</html>


<?php

$random = substr(md5(mt_rand()), 0, 6);
echo '<span style="font-size: 50px;"> ' . $random.  '</span>';
$_SESSION["random"] = $random;




define('DB_DSN','mysql:dbname=abdikaf1_web;host=abdikafi.greenriverdev.com');
define('DB_USERNAME','abdikaf1_abdikaf');
define('DB_PASSWORD','N{Bca-Oqw21h');
    class DataLayer
{
    // Add a field for the database object
    /**
     * @var PDO The database connection object
     */
    private $_dbh;

    // Define a constructor

    /**
     * DataLayer constructor.
     */
    function __construct()
    {

        try {
            //Instantiate a PDO database object
            $dbh = new PDO (DB_DSN, DB_USERNAME, DB_PASSWORD);
            echo "Yay!";
        }
        catch (PDOException $e) {
             echo "Error connecting to DB " . $e->getMessage();
            die ("NOT CONNECTED.");
        }

    }
    function save($plann)
    {
        //1. Define the query
        $sql = "INSERT INTO planning (Fall, Winter, Spring,Summer) 
                VALUES (:fall, :winter, :spring,:summer)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $statement->bindParam(':fall', $plann->getFall(), PDO::PARAM_STR);
        $statement->bindParam(':winter', $order->getWinter(), PDO::PARAM_STR);
        $statement->bindParam(':spring', $order->getSpring(), PDO::PARAM_STR);
        $statement->bindParam(':summer', $order->getSummer(), PDO::PARAM_STR);

        //4. Execute the query
        $statement->execute();

        //5. Process the results (get OrderID)
        $id = $this->_dbh->lastInsertId();
        return $id;
    }


}










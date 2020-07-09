<?php
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $databasename = "BaseTest01";

    try{
        $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       echo "Connected successfully";
       $sql = "UPDATE Produit SET Quantité='1' WHERE id='4'";
       $stmt = $pdo->prepare($sql);
     
       $stmt->execute();
    
       echo $stmt->rowCount() . " records UPDATED successfully";
     } catch(PDOException $e) {
       echo $sql . "<br>" . $e->getMessage();
     }
    
    }
?>
<?php
connect_to_database();
?>
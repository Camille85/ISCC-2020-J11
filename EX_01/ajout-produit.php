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
        echo "<br/>";
        $sql = "INSERT INTO Produit (id, Nom, Description, Prix, Quantité)
        VALUES ('8', 'T-shirt noir', 'T-shirt coton de couleur noire', '15.50', '10')";
        
        
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
    
}
?>

<?php
connect_to_database();
?>


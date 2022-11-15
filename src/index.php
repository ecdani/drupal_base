<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Hola Mundo</p>'; ?>
 <?php
    $servername = "mariadb";
    $username = getenv('MARIADB_USER');
    $password = getenv('MARIADB_PASSWORD');
    $database = getenv('MARIADB_DATABASE');
    try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to mariadb successfully";
    } catch(PDOException $e) {
    echo "Connection to mariadb failed: " . $e->getMessage();
    }
 ?> 
 <?php phpinfo(); ?>
 </body>
</html>

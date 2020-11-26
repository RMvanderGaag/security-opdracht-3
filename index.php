<?php
    $host = 'localhost';
    $dbname = 'sqlinjection';
    $username = 'root';
    $password = 'root';


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?> 
    
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="GET" action="index.php">
            <input type="text" name="user">
            <input type="submit">
        </form>
        <?php
            echo htmlspecialchars($_GET['user']);
        ?>
    </body>
</html>
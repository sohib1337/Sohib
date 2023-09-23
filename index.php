<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
$host = "db4.myarena.ru";
$dbname = "u19978_a03";
$username = "u19978_a03";
$password = "Y0y3P1m1L0";


try 
{   
    $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
}   
catch (\Throwable $th) 
{   
    echo "Ошибка подключения"; return;
    }

echo "<style>
.heading{
    background-color: green;
    align-items: center;
    color: aliceblue;
}
</style>";

echo "<Table border - 1>";
$result = $connection->query('SELECT * FROM `product`');
$row = $result->fetch(PDO::FETCH_ASSOC );

foreach ($row as $key => $value) {
    echo "<td align = center bgcolor = green>".$key."</td>";
}

do {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>".$value."</td>";

    }
    echo "</tr>";

}
while ($row = $result->fetch(PDO::FETCH_ASSOC));

echo "</table>";
?>
</body>
</html>

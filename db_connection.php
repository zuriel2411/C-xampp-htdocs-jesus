<?php
$servername = "localhost"; 
$username = "zuriel";
$password = "22920082zza";
$database = "tablas "; 


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$sql = "SELECT id, name, description, brand, price, quantity, image FROM products";
$result = $conn->query($sql);

$products = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $product = array(
            "id" => $row["id"],
            "name" => $row["name"],
            "description" => $row["description"],
            "brand" => $row["brand"],
            "price" => $row["price"],
            "quantity" => $row["quantity"],
            "image" => $row["image"]
        );
        array_push($products, $product);
    }
}

echo json_encode($products);


$conn->close();
?>

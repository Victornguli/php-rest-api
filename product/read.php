<?php
include "../config/database.php";

$query = "SELECT 
            c.name as category_name, p.category_id, p.id, p.name, p.description, p.price, p.created 
        FROM 
            products p
            LEFT JOIN 
                categories c ON p.category_id = c.id
        ORDER BY
            p.created DESC";


$result = mysqli_query($conn, $query);
//$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
//echo json_encode($products);

$products = array();

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
       array_push($products, $row);
    }
    http_response_code(200); //OK
    echo json_encode($products); //Return products list in JSON

}else{
    http_response_code(404); //Error Not found
    echo json_encode(array("message" => "No products found."));
}



//echo json_encode($products);
?>
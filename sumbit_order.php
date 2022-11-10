<?php

//connect to the database
$servername = "olivere3.sg-host.com";
$username = "uxqkkpfsvgijy";
$password = "tveitsund";
$dbname = "dbatpyinxrzli0";


$conn = new mysqli($servername, $username, $password, $dbname);

//check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from menu_items";
$result = $conn->query($sql);

$index = 0;
if ($result->num_rows > 0) {
    // make the table bits
    while ($row = $result->fetch_assoc()) {

        if ($_GET["sel" . $index] > 0) {

            echo '<tr>';
            echo '<th>' . $row["food_name"] . ' x ' . $_GET["sel" . $index] . '</th>';
            for ($i = 0; $i < 100; $i++) {
                echo "<option>" . $i . "</option>";
            }
            echo '<th>-- $' . number_format($row["price"], 2, '.', '') . '</th>';
            echo '</tr>';
        }
        $index++;
    }
} else {
    echo "0 results";
}
//store the order in the database
$sql2 = "INSERT INTO `orders` (first_name,last_name,order_date,quanity_item_1,quanity_item_2,quanity_item_3,quanity_item_4,quanity_item_5)
VALUES ('" . $_GET['fname'] . "', '" . $_GET['lname'] . "', '" . date('m/d/Y', time()) . "' , " . $_GET['sel0'] . ", " . $_GET['sel1'] . ", " . $_GET['sel2'] . ", " . $_GET['sel3'] . ", " . $_GET['sel4'] . ")";

$conn->query($sql2);
$conn->close();


?>

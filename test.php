<?php
$servername = "olivere3.sg-host.com";
$username = "uxqkkpfsvgijy";
$password = "tveitsund";
$dbname = "dbatpyinxrzli0";


$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from menu_items";
$result = $conn->query($sql);

$index=0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<th><img src="images/'.$row["image_path"].'"></th>';
        echo '<th>'.$row["food_name"].'</th>';
        echo '<th>'.number_format((float)($row["price"]), 2, '.', '').'</th>';
        echo '<th><select id="quan'.$index.'" size="1" name="sel'.$index.'">';
        for($i =0;$i<100;$i++){
            echo "<option>".$i. "</option>";
        }
        echo '</select></th>';
        echo '<th><p class="cost" id="cost'.$index.'">0</p></th>';
        echo '</tr>';
        $index++;
    }
} else {
    echo "0 results";
}
$conn->close();
?>

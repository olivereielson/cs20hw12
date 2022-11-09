

<?php
$servername = "olivere3.sg-host.com";
$username = "uxqkkpfsvgijy";
$password = "tveitsund";
$dbname = "dbatpyinxrzli0";



$conn2 = new mysqli($servername, $username, $password,$dbname);


$sql2="INSERT INTO `orders` (first_name,last_name,order_date,quanity_item_1,quanity_item_2,quanity_item_3,quanity_item_4,quanity_item_5)
VALUES ('".$_GET['fname']."', '".$_GET['lname']."', 'trtrt' , ".$_GET['sel0'].", ".$_GET['sel1'].", ".$_GET['sel2'].", ".$_GET['sel3'].", ".$_GET['sel4'].")";


$sql="INSERT INTO `orders` (first_name,last_name,order_date,quanity_item_1,quanity_item_2,quanity_item_3,quanity_item_4,quanity_item_5)
VALUES ('ole','er' ,'erer',1,2,3,4,5)";


if ($conn2->query($sql2) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql2 . "<br>" . $conn2->error;
}

$conn2->close();

?>
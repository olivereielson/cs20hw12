<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jade Delight</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <style>
        img {
            width: 100px;
            height: 100px;
            border-radius: 25px;
        }

        .box{
            background-color: rgba(255,255,255,0.1);
            border-radius: 25px;
            padding: 10px;
            margin: 20px 20px;
        }
        h1 {
            color: #0083b7;
            display:inline;
            font-size: 40px;
        }
        label {
            display: inline;
            text-align: left;
            width: 200px;
        }
        h4{
            float: right;
            margin: 10px;

        }
        input{
            float: right;
            background-color: #0083b7;
        }

        div{
            margin: 10px;
        }
        table {
            border-spacing: 10px;
            border-collapse: separate;
        }
       .line{
           height: 2px;
           color: white;
       }
    </style>
</head>

<body>

<div>
    <h1>Vegan Delight</h1>
    <h4>Hours: 7:00pm - 2:00pm</h4>
</div>



<div class="box">
    <h2>Personal Info</h2>
    <h3><?php echo $_GET["fname"]." ".$_GET["lname"]; ?></h3>
    <h3><?php echo $_GET["instructions"]; ?></h3>
</div>

<div class="box">
    <h2>Your Order</h2>
    <table>
        <th> </th>
        <?php include "sumbit_order.php"; ?>

    </table>
    <div class="line"></div>
    <h5><?php echo "Subtotal $".$_GET["subtotal"]; ?></h5>
    <h5><?php echo "Tax $".$_GET["tax"]; ?></h5>
    <h5><?php echo "Total $".$_GET["total"]; ?></h5>
</div>






</body>
</html>
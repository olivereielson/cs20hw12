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
        #hhe{
            float: none;
            margin-left: 25px;
        }
    </style>
</head>

<body>

<div>
    <h1>Vegan Delight</h1>
    <h4>Hours: 7:00pm - 2:00pm</h4>
</div>



<div class="box">
    <h2>Your Order</h2>
    <table>
        <th> </th>
        <th>Item Name</th>
        <th>Cost Each</th>
        <th>Select Quantity</th>
        <th>Total Cost</th>
        <?php include "test.php"; ?>
    </table>
</div>





</body>
</html>